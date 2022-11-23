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

