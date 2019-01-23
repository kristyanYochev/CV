class Carousel {
    constructor(parentElement) {
        this.parentElement = parentElement
        this.slides = parentElement.querySelectorAll(".carousel__slide")
        this.activeSlide = 0

        this.interval = null
        this.rotating = false

        this.setSlide = this.setSlide.bind(this)
        this.nextSlide = this.nextSlide.bind(this)
        this.start = this.start.bind(this)
    }

    setSlide(slideNumber) {
        if (slideNumber >= this.slides.length || slideNumber < 0) {
            console.error(`Invalid slide number: ${slideNumber}`)
            return;
        }

        this.activeSlide = slideNumber;

        // Deactivate all slides
        this.slides.forEach(slide => {
            slide.classList.remove("active")
        })

        this.slides[slideNumber].classList.add("active")
    }

    nextSlide() {
        if (this.activeSlide + 1 >= this.slides.length) {
            this.setSlide(0)
        } else {
            this.setSlide(this.activeSlide + 1)
        }
    }

    start(delay) {
        if (this.rotating) {
            console.error("Unable to start carousel: already started!")
            return;
        }
        this.rotating = true
        this.interval = setInterval(this.nextSlide, delay)
    }

    stop() {
        this.rotating = false
        clearInterval(this.interval)
    }
}

(() => {
    var pplTestsCarousel = new Carousel(document.getElementById("ppl-tests"))
    pplTestsCarousel.start(2500)

    var hackTues3Carousel = new Carousel(document.getElementById("hacktues3-carousel"))
    hackTues3Carousel.start(2000)

    var hack30xTuesCarousel = new Carousel(document.getElementById("hack30xtues-carousel"))
    hack30xTuesCarousel.start(3000)
})()