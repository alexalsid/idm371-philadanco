// meet the team js

var cards = document.querySelectorAll('.card-cont');
var buttons = [];

for (i = 0; i < cards.length; i++) {

   buttons.push(cards[i].children[0]);

   console.log(buttons);

}

for (x = 0; x < buttons.length; x++) {

    buttons[x].addEventListener('click', bioShow);
}

function  bioShow() {

    var card = this.nextSibling.nextSibling;
    var bio = card.children[3];
    console.log(card);
    console.log(bio);
    if (bio.classList.contains('show')) {
    bio.classList.remove('show');
    bio.classList.add('hide');
    } else if (bio.classList.contains('hide')) {
        bio.classList.remove('hide');
        bio.classList.add('show');
        

    } else {

        bio.classList.add('show');

    }
    
    

    
}


var dancers = document.querySelector('.dancers').children;

for (z = 0; z < dancers.length; z++) {

    if (z % 2 === 0) {
        var purple_uri = "/dist/img/purple_swirl.svg";
        
        dancers[z].setAttribute('style', 'background-image: url("http://alsid.design/idm371-philadanco/wordpress/wp-content/themes/philadanco/dist/img/yellow_swirl.svg")');
    } else {
        var yellow_uri = "/dist/img/yellow_swirl.svg";
        dancers[z].setAttribute('style', 'background-image: url("http://alsid.design/idm371-philadanco/wordpress/wp-content/themes/philadanco/dist/img/purple_swirl.svg")');
    }
}