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

    document.querySelectorAll(".navlink").forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault()
            document.getElementById("main-content").animate([
                {transform: "rotateY(360deg)"},
                {transform: "rotateY(0deg)"}
            ], 500)
            
            // Deactivate all links
            document.querySelectorAll(".navlink").forEach(link => link.classList.remove("active"))
            // Activate the clicked link
            e.target.classList.add("active")
            
            let hash = new URL(e.target.href).hash

            // Deactivate all sections
            document.querySelectorAll(".card__section").forEach(section => section.classList.remove("active"))
            // Activate the section
            document.querySelector(hash).classList.add("active")
        }, false)
    })
})()