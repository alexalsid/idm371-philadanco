
var burger = document.getElementById('burger');


function openMenu () {
    var menu = document.querySelector('menu-cont');
    if (menu.classList.contains('close')) {
        menu.classList.remove('close');
    } else {

    menu.classList.add('open');
    }

}

function closeMenu () {

    if (menu.classList.contains('open')) {
        menu.classList.remove('open');
    } else {

        menu.classList.add('close');
    }


}


