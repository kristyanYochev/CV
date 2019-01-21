(() => {
    // This is the code for the nav-bar sticking to the top when scrolling through it
    var navWaypoint = new Waypoint({
        element: document.querySelector(".nav-container"),
        handler: function(direction) {
            if (direction === "down") {
                this.element.classList.add("nav-container--fixed")
            } else {
                this.element.classList.remove("nav-container--fixed")
            }
        },
        offset: 20
    })

    var sections = document.querySelectorAll(".card__section")
    sections.forEach(section => {
        new Waypoint({
            element: section,
            handler: function() {
                document.querySelectorAll(".nav-container a").forEach(link => link.classList.remove("active"))
                document.querySelector(`.nav-container a[href="#${section.id}"]`).classList.add("active")
            }
        })
    })
})()