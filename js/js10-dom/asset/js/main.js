console.log('JS DOM 2');
///////////////////////
// DOM 2
///////////////////////
const section = document.querySelector('section');
const p = section.querySelector('p');
const img = section.querySelector('img');
const a = p.querySelector('a');
const input = section.querySelector('input');

// console.log({section,p,img,a,input});
// section.style.backgroundColor = 'grey';
console.log(p.childNodes);
// console.log(section.children);
p.childNodes[0].nodeValue = 'Ici le nouveau paragraphe'
p.childNodes[1].innerText = '<span>Ici le nouveau texte du lien</span>'
// p.childNodes[1].innerHTML = '<span>Ici le nouveau texte du lien</span>'
p.childNodes[2].nodeValue = 'texte nouveau en dessous du lien'


// au bout de 2 secondes
    // a  => modifier le texte du lien  => modifier sa couleur => red
setTimeout(() => {
    a.innerText = "Encore nouveau texte pour le lien";
    a.style.color = 'red';
    // console.log(a.innerHTML);
}, 2000);

console.log(a.innerHTML);

console.log({img})
console.log(img.src); // https://picsum.photos/id/2/200/300
console.log(img.alt); // hello

setTimeout(() => {
    img.src = "https://www.weblitzer.fr/wp-content/themes/weblitzer2/img/ampouleseule.png"
    img.title = 'Weblitzer'
}, 2000);


console.log(img.attributes);

// aller chercher la valeur d'un attribut
console.log(img.getAttribute('alt'));
console.log(img.getAttribute('data'));
// Donner une valeur à un attribut
img.setAttribute('data', 'ici un texte pour attribut data');
console.log(img.getAttribute('data'));
// Verifier si attribut existe
console.log(img.hasAttribute('data')); // true
console.log(img.hasAttribute('nom')); // false

// input

input.focus(); // Ici je peux écrire directement dans l'input
input.value = 'Michel'; // Je donne une value à l'input
console.log(input.value); // Récupération de la value de l'input
input.blur(); // Je quitte l'input
//input.type = 'password';
input.placeholder = 'Ici votre nom';
input.disabled = true;
// input.disabled = false;
input.name = 'prenom';

// modification du css, modification de class

console.log(section.style);
console.log(section.className);
section.className += ' error';
console.log(section.getAttribute('class'));

// classList
console.log(section.classList);
// Ajouter une class à votre sélection
section.classList.add('error2');
console.log(section.classList);
// Enlever une class
section.classList.remove('dede');
section.classList.remove('dada');
console.log(section.classList);

// toggle
// section.classList.add('open');
// section.classList.toggle('open');

setTimeout(() => {
    section.classList.toggle('open');
}, 3000);

// Besoin de savoir si une boite possede une class
// contains
console.log(section.classList.contains('open')); // true






// DATA SET