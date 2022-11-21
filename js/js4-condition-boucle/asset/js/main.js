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














