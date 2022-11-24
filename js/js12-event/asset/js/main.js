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






