console.log('JS 4');
// Conditions
// if, else if, else => SI, SINON SI, SINON
let age = 78;
console.log(age);
if(age >= 18) {
    console.log('je suis majeur');
    if(age >= 64) {
        console.log(' et retraité')
    } else {
        console.log(' et je bosse')
    }
} else if (age >= 12) {
    console.log('je suis mineur et vacciné')
} else {
    console.log('je suis un enfant')
}
// si + de 18
    // je suis majeur
    // si age >= 64
        // et retraité
    // sinon
        //  et je bosse
// sinon si age >= 12
    // je suis mineur et vacciné
// sinon
    // je suis un enfant
////////////////
// EXO 2
///////////////////
//  Demandez à l'utilisateur sa taille(cm) et son poids(kg)
// conditions
//     -> si personne plus de 2 metres et plus de 90kg
//         => tu es costaud
//     -> sinon
//            => tailler comme une branche de sureau
// let taille = prompt('Combien mesurez-vous? (cm)');
// let poids = prompt('Combien pesez-vous? (kg)');
// console.log({taille,poids});
//
// if(taille >= 200 && poids >= 90) {
//     console.log('Costaud');
// } else {
//     console.log('Sureau');
// }

// Conditions ternaire
let verite = 12 < 24 ? 'OUI' : 'NON' ; // OUI
console.log(verite);

const newAge = 8;
let status = newAge >= 18 ? 'Majeur' : newAge >= 12 ? 'Ado' : 'Enfant';
console.log(status);
// Switch
const pays = 'Italie';
switch(pays) {
    case 'Espagne':
        console.log('Viva espana');
        break;
    case 'France':
    case 'Italie':
        console.log('Viva Italia');
        break;
    default:
        console.log('Je suis un pays en voie de développement');
}
/////////////////////////////////////////
// BOUCLES
/////////////////////////////////////////
// while
let j = 0;
while(j < 100) {
    console.log(j);
    j++;
}
// do while
let k = 1;
do {
    console.log('k: ' + k);
    k++;
} while (k <+ 20);
/////////////////////
// FOR
///////////////////////
// for(initialisation; condition; incrementation) {
//
// }
// les chiffres de 1 à 100 grâce à document.write
for(let i = 1; i <= 100; i++) {
    document.write(i + ' ');
}
// les chiffres de 5 à 25 séparés par virgule, en enlevant la dernière virgule
document.write('<br>');
for(let i = 5; i <= 25; i++) {
    document.write(i);
    if(i < 25) {
        document.write(',');
    }
}
document.write('<br>');
// affichez les multiples de 5 compris entre 0 et 120 séparés par tiret du 6
let countTotal = 120;
for(let i = 0; i <= countTotal; i+=5) {
    document.write(i);
    if(i < countTotal) {
        document.write('-');
    }
}
document.write('<br>');
// affichez les nombres pairs de 19 à 67, séparés par balise br
for(let i = 19; i<= 67; i++) {
    if(i % 2 == 0) {
        document.write(i + '<br>');
    }
}
let date = new Date();
console.log(date);
let annee = date.getFullYear();
console.log(annee);
// affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "p", ayant une classe  "birth_date"

// // affichez , en html, les nombres de 1 à 100, Les chiffres de 40 à 48 et 78 à 89 doivent être en vert et les autres en rouge.















