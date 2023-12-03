/*functions of scrolling */
window.onscroll = function () { scrollNavigation() };

function scrollNavigation() {
    if (window.scrollY > 1) {
        /*document.querySelector('#navBar').classList.add('navScroll'); //shrinking and adding background to navigation bar
        document.querySelector('#logo').classList.add('logoScroll'); //shrinking the logo*/
    }
    else { //resetting all the scroll functions of nav bar
        /*document.querySelector('#navBar').classList.remove('navScroll');
        document.querySelector('#logo').classList.remove('logoScroll');*/
    }
};

/*menu toggle settings of smaller screens */
var menuBtn = document.querySelector('#menuIcon');
var menu = document.querySelector('.menu');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('fa-xmark'); //changing menu icon to cross
    menu.classList.toggle('menuToggle');
});

//function for showing video embedded player

var player = document.getElementById("hidePlayer");

function openPlayer() {
    player.style.display = "flex";
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;//for safari browser

}

//on scroll animation loader for banner 2 in landiing page

// Get the #animate element
const animateSection = document.querySelector('#animate');

// Add an event listener to the window object to listen for scroll events
window.addEventListener('scroll', () => {
    // Get the distance between the top of the viewport and the top of the #animate element
    const distanceToAnimate = animateSection.getBoundingClientRect().top;

    // If the distance to the #animate element is less than or equal to 300, add the 'animate' class to the child elements
    if (distanceToAnimate <= 300) {
        document.querySelector('.Banner2Animation #child2').classList.add('animate');
        document.querySelector('.Banner2Animation #big_grass2').classList.add('animate');
        document.querySelector('.Banner2Animation #small_grass2').classList.add('animate');
    }
});

//for programs part
const animateSection2 = document.querySelector('#animate_zoomInDown');

window.addEventListener('scroll', () => {
    const distanceToAnimate2 = animateSection2.getBoundingClientRect().top;

    if (distanceToAnimate2 <= 300) {
        console.log('working fine');
        animateSection2.classList.add('show', 'animate__animated', 'animate__zoomInDown');
    }
});

// Add an event listener to the window object to listen for the 'load' event
window.addEventListener('load', () => {
    // Remove the 'animate' class from the child elements
    document.querySelector('.Banner2Animation #child2').classList.remove('animate');
    document.querySelector('.Banner2Animation #big_grass2').classList.remove('animate');
    document.querySelector('.Banner2Animation #small_grass2').classList.remove('animate');
    document.querySelector('#animate_zoomInDown').classList.remove('animate__animated', 'animate__zoomInDown', 'show');
});


// always scrolls to the top of the page when scrolling
window.addEventListener('load', () => {
    // Scroll to the top of the page
    window.scrollTo(0, 0);
});


//cursor following "bee" icon script 

(function () {
    console.clear();

    const follower = document.querySelector('#cursor_follower');

    let posX = 0;
    let posY = 0;
    let mouseX = 0;
    let mouseY = 0;

    const ease = 0.025;

    function easeTo() {
        const followerBounds = follower.getBoundingClientRect();

        const dX = mouseX - (followerBounds.left + 16);
        const dY = mouseY - (followerBounds.top + 16);

        posX += dX * ease;
        posY += dY * ease;
    }

    function update() {
        easeTo();
        follower.style.transform = `translate3d(${posX}px, ${posY}px, 0)`;
        requestAnimationFrame(update);
    }

    function setCoords(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    }

    document.onmousemove = setCoords;
    update();
})();