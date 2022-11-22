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

// Concaténation
console.log('Hello le ' + str3); // Hello le Mars
const x = 'Bonjour';
// backticks
const z = `
    <p>Je vous dit ${x.toLowerCase()}</p>
    <p>${ ( 34+45.54546).toFixed(2) }</p>
`;
console.log(z);

let user = {
    prenom: 'Michel',
    age: 12,
    notes: {
        php: 12,
        js: 15,
        css: 14
    }
}
console.log(`Je suis ${user.prenom} et j'ai ${user.age} ans. Ma note en php est ${user.notes.php}, en js ${user.notes.js} et en css ${user.notes.css}. Ma moyenne est de ${ ((user.notes.php + user.notes.js + user.notes.css) / 3).toFixed(2) }`);

// index, length
let utilisateur = 'MichMlle';
console.log(utilisateur[1]); // i
console.log(utilisateur[3]); // h
// Nbre de caractères dans une chaine
console.log(utilisateur.length); // 8

console.log(utilisateur.charAt()); // M
console.log(utilisateur.charAt(3)); // h
console.log(utilisateur.endsWith('lle')); // true
console.log(utilisateur.startsWith('mi')); // false
console.log(utilisateur.startsWith('Michel')); // true
// replace
console.log(utilisateur.replace('M', 'Jean M')); // Jean Michelle
console.log(utilisateur.replaceAll('M', 'Jean M')); // Jean MichJean Mlle
// search
console.log(utilisateur.search('e')); // 4
const utilisateur2 = '      Bernard      ';
console.log(utilisateur2.trim()); // 'Bernard'
console.log(utilisateur2.toUpperCase().trim()); // BERNARD
console.log(utilisateur2.toLowerCase().trim()); // bernard

let ville = 'istanbul';
let locale = 'fr';
console.log(ville.toLocaleUpperCase(locale)); // ISTANBUL
console.log(ville.toLocaleUpperCase('tr')); // İSTANBUL

// includes
let animal = 'petit pangolin';
console.log(animal.includes('Pangolin')); // false
console.log(animal.includes('pangolin')); // true
console.log(animal.includes('pangolin', 8)); // false
console.log(animal.includes('pangolin', 3)); // true

// indexOf, lastIndexOf
let hello = 'Bonjour andrée! Bonjour Jacky';
console.log(hello.indexOf('Bonjour')); // 0
console.log(hello.indexOf('bonjour')); // -1
console.log(hello.indexOf('Bonjour', 10)); // 16

console.log(hello.lastIndexOf('Bonjour')); // 16
console.log(hello.lastIndexOf('bonjour')); // -1
// split
const bandes = 'Jean,Michel,Jacky,Bernard';
const tabPotes = bandes.split(',');
console.log(tabPotes); // ['Jean', 'Michel', 'Jacky', 'Bernard']
const tabPotes2 = bandes.split('e');
console.log(tabPotes2); // ['J', 'an,Mich', 'l,Jacky,B', 'rnard']
const tabPotes3 = bandes.split(',', 2);
console.log(tabPotes3); // ['Jean', 'Michel']

// concat
console.log('Bonjour'.concat(' bernard.', ' Comment' , ' vas' , ' tu', '?')); // Bonjour bernard. Comment vas-tu?
// slice
const bandes2 = 'Jean,Michel,Jacky,Bernard';
console.log(bandes2.slice(2,5)); // an,
console.log(bandes2.slice(10)); // l,Jacky,Bernard