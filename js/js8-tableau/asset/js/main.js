console.log('JS 8 - Tableaux');
///////////////////////
// Tableau / Array
///////////////////////

const tab = [];
const tab2 = [8,'dede', { a: 2 }, ['dede', 'dodo']];
console.log(tab2);
// 2 qui viens de l'objet
console.log(tab2[2].a);
console.log(tab2[2]['a']);
// dodo
console.log(tab2[3][1]);

const tab3 = [
    [2, [56,'michel', ['dede', 'dodo', { a: 3, b: ['dudu']}]]]
]

console.log(tab3);
console.log(tab3[0][1][2][2].b[0]); // dudu

// if is a array
console.log(typeof tab2); // object
console.log(Array.isArray(tab2)); // true

//
const tab5 = ['Papaye','Kiwi','Banane', 'Tomate'];
console.log(tab5.length); //  4
console.log(tab5[2]); // Banane
tab5[1] = 'Litchi';
//
// Ajouter à la fin "Groseille"
tab5.push('Groseille');
tab5.push('Courgettes');
console.log(tab5);

// Enlever le dernier
tab5.pop();
console.log(tab5);

// Ajouter au début
tab5.unshift('Fraise');
tab5.unshift('Mangue');
console.log(tab5);

// Enlever au début
tab5.shift();
console.log(tab5);

// copier un tableau
const copyFruit = tab5;
copyFruit[1] = 'dada';
console.log({tab5,copyFruit});

// ok pour copier avec des tableaux qui contienne d'object
const tab6 = [...copyFruit]
tab6[1] = 'michel';
console.log({tab6,copyFruit});

const tab7 = ['Banane', { car: 'pigeot'}, 'kiwi'];
const tab8 = [...tab7];
tab8[1].car = 'punto';
console.log({tab7,tab8});

// La bonne solution pour une copie
const tab9 = ['Banane', { car: 'pigeot'}, 'kiwi'];
const copy9 = JSON.parse(JSON.stringify(tab9));
copy9[1].car = 'punto';
console.log({tab9,copy9});

// Itérer sur tableau

const legumes = ['Courgette', 'Radis', 'Blette', 'Courge'];

// for
for(let i = 0; i < legumes.length; i++) {
    document.write(`<p>${legumes[i]}</p>`)
}
document.write(`<hr>`)
// forEach
legumes.forEach(function(legume) {
    document.write(`<p>${legume}</p>`)
});
document.write(`<hr>`)
legumes.forEach((l) => {
    document.write(`<p>${l}</p>`)
});
document.write(`<hr>`)

// for
for (let legume of legumes) {
    document.write(`<p>${legume}</p>`)
}












