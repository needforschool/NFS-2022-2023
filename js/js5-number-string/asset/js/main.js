///////////////
// Number
////////////
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Number
// Perte de précision
console.log(0.2+0.4); // 0.6000000000000001
console.log(0.2*0.4); // 0.08000000000000002
console.log(5657657627572657652); // 5657657627572657000
// Base 64bits => Perte de précision par overflow
// 1/3 => 0.3333333333333 => Perte de précision par arrondi

// Number.parseInt()
// Number.parseFloat()
// Number.isInteger()
// Number.isNaN()

// Méthode globale
console.log(parseFloat('12.9 euros')); // 12.9
console.log(parseInt('12.9 euros')); // 12
console.log(parseFloat('Merci pous vos 12.9 euros')); // NaN
console.log(parseFloat('2,56')); // 2
// Exo
// let nombre1 = prompt('Quel est le premier chiffre');
// let nombre2 = prompt('Quel est le deuxième chiffre');
// // alert(resultat de l'addition)
// let resultat = parseFloat(nombre1) + parseFloat(nombre2);
// alert(resultat);

const a = 100000000;
console.log(a.toExponential()); // 1e+8
const b = 2.6588454658976;
console.log(b.toFixed(3)); // 2.659
const c = 40;
console.log(c.toFixed(2)); // 40.00

// Math
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Math
console.log(Math.PI); // 3.141592653589793
console.log(Math.PI.toFixed(3)); // 3.142

console.log(Math.random()); // Aléatoire entre 0 et 1

// Arrondit à l'entier le plus proche
console.log(Math.round(4.9)); // 5
console.log(Math.round(4.4)); // 4
console.log(Math.round(4.5)); // 5
// Retourne l'entier le plus grand
console.log(Math.ceil(4.9)); // 5
console.log(Math.ceil(4.4)); // 5
console.log(Math.ceil(4.5)); // 5
// Retourne l'entier le plus petit
console.log(Math.floor(4.9)); // 4
console.log(Math.floor(4.4)); // 4
console.log(Math.floor(4.5)); // 4
console.log(Math.floor(-4.5)); // -5
//////////////////////////////////
// CHAINE DE CARACTERE  => String
///////////////////////////////
const str1 = 'La lune';
const str2 = "Le soleil";
const str3 = String('Mars');
const str4 = new String('Neptune');

console.log({str1,str2,str3,str4});

// \' // échappement guillemet simple
// \" // échappement guillemet double
// \n // saut de ligne
// \t // tabulation




















