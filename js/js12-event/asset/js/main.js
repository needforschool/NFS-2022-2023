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








