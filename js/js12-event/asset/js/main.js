console.log('JS 12 - Events');
/////////////////////
// Events
//////////////////////
// https://developer.mozilla.org/fr/docs/Web/Events

function clickPerso() {
    const body = document.querySelector('body');
    body.style.backgroundColor = 'lime';
}
function changeColor(el, color = 'grey') {
    console.log({el});
    el.style.color = color;
}

// INFOS 
const infos = document.querySelector('#infos');
console.log(infos);

infos.addEventListener('click', function(event) {
    console.log(event.clientX);
    console.log('click dans la boite infos');
});

// onmouseenter , onmouseleave
infos.addEventListener('mouseenter', function(e) {
    console.log('ok je rentre');
    this.style.backgroundColor = 'red';
});

infos.addEventListener('mouseleave', (e) => {
    console.log('ok je sort');
    infos.style.backgroundColor = 'gainsboro';
})
// infos2

const paragraphes = document.querySelectorAll('#infos2 p');
console.log(paragraphes);

// for(let i = 0; i < paragraphes.length; i++) {
//     paragraphes[i].addEventListener('click', function() {
//         this.style.color = 'red'
//     });
// }
paragraphes.forEach((p) => {
    p.addEventListener('click', function() {
        if(p.dataset.color) {
            //console.log('color ok')
            this.style.color = p.dataset.color
        } else {
            //console.log('color pas ok');
            this.style.color = 'red'
        }

       // this.style.color = 'red'
    });
});

const boite = document.querySelector('#boite');
boite.addEventListener('click', function() {
    //boite.classList.toggle('open')
    if(boite.classList.contains('open')) {
        boite.classList.remove('open')
        boite.innerText = '';
    } else {
        boite.classList.add('open');
        boite.innerText = 'Le texte'
    }
})

///////////////////////////////////
// Bubbling => bouillonnement
//////////////////////////////////
const box1 = document.querySelector('#box1');
const box2 = document.querySelector('#box2');
const box3 = document.querySelector('#box3');
box1.addEventListener('click', function() {
    console.log('Click box 1')
});
box2.addEventListener('click', function(evt) {
    evt.stopPropagation();
    console.log('Click box 2')
})
box3.addEventListener('click', function(evt) {
    evt.stopPropagation(); // empêche le bouillonnement
    console.log('Click box 3')
});




