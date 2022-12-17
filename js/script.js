/*functions of scrolling */
window.onscroll = function(){scrollNavigation()};

function scrollNavigation(){
    if(window.scrollY > 1){
        /*document.querySelector('#navBar').classList.add('navScroll'); //shrinking and adding background to navigation bar
        document.querySelector('#logo').classList.add('logoScroll'); //shrinking the logo*/
    }
    else{ //resetting all the scroll functions of nav bar
        /*document.querySelector('#navBar').classList.remove('navScroll');
        document.querySelector('#logo').classList.remove('logoScroll');*/
    }
};

/*menu toggle settings of smaller screens */
var menuBtn = document.querySelector('#menuIcon');
var menu = document.querySelector('.menu');

menuBtn.addEventListener('click', () =>{
    menuBtn.classList.toggle('fa-xmark'); //changing menu icon to cross
    menu.classList.toggle('menuToggle');
});

//function for showing video emberded player

var player = document.getElementById("hidePlayer");

function openPlayer() {
    player.style.display = "flex";
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;//for safari browser

}