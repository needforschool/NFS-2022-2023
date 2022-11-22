////////////////
// OBJECT
//////////////////////
// objet est un ensemble de key => value
const a = {};
const b = Object();
const c = new Object();
console.log({a,b,c});
const employe = {
  age: 42,
  salaire: 32000,
  job: 'Dev',
  'date de naissance':  '12/12/12',
  vacancy: {
      noel: '24/12/22',
      paques: '02/04/23'
  },
  outOfEntreprise: false,
  planning: ['rdv1','rdv2']
};
console.log(employe);
console.log(employe['date de naissance']); // 12/12/12
console.log(employe.vacancy.noel); // '24/12/22',
console.log(employe.planning[1]); // rdv2

const combi = {
    marque: 'VW',
    km: 12435,
    color: {
        int: 'green',
        ext: 'red'
    },
    isTurbo: true,
    getColorInt: function() {
        return this.color.int;
    },
    setColorInt: function(couleur) {
        this.color.int = couleur
    }
}
console.log(combi);
console.log(combi.km); //
console.log(combi.color.ext);
console.log(combi['color']['ext']);
console.log(combi.getColorInt()); // 'green'
combi.setColorInt('lime');
console.log(combi.color.int); // lime

// Modifier un object
const monObject = {}
monObject.prop1 = 'Georges';
monObject['prop2'] = 'Bernard';
monObject.prop2 = 'Jacky'
monObject.prop1 += ' Moroder';
console.log(monObject);

// Raccourci synthaxique.
const x = 12;
const y = 34;
const z = { a: 45465 };
const newObject = { x: x, y: y, z: z }
console.log(newObject);
const newObject2 = { x,y,z }
console.log(newObject2);

// décomposition d'object
const punto = {
    marque: 'Fiat',
    km: 1231,
    color: {
        int: 'sale',
        ext: 'noir'
    },
    isTurbo: false
}
// const marque = punto.marque;
// const km = punto.km;
// const color = punto.color;
let km = 4665;
const {marque,km: kilometre, color} = punto
console.log({marque,km,kilometre, color});

// REST => spread operator
const {marque: model, ...rest} = punto;
console.log(model); // Fiat
console.log(rest);
const obj4 = {g:1,h:2,i:3,j:4};
const {g,h, ...restEncore} = obj4;
console.log({g,h,restEncore});

// Tester l'existence des propriétés












