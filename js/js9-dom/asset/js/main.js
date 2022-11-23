console.log('JS 9 DOM');
/////////////
// DOM
////////////
// console.log(document);
// console.log(window.document);
// console.log(window);
// SELECTION
// Selection par id
const title = document.getElementById('title');
console.log({title});
setTimeout(() => {
    title.style.color = 'lime';
    title.style.backgroundColor = 'blue';
    title.style.marginLeft = '50px';
    title.style.padding = '1rem';
    title.innerText = 'Mon Super mega top titre'
}, 2000);
// selection par la balise
const fruits = document.getElementsByTagName('li');
console.log(fruits);

fruits[0].style.color = 'red';
fruits[1].style.color = 'yellow';
fruits[2].style.color = 'gainsboro';
fruits[3].style.color = 'orange';

setTimeout(() => {
    for(let i = 0; i < fruits.length; i++) {
        fruits[i].style.color = 'lime'
    }
}, 2000);

// Sélection par class
const titles = document.getElementsByClassName('megatitle');
console.log(titles);

// au bout de 4 secondes après chargement de la page ,
// transformer tous les titres avec une font-size de 4Rem





