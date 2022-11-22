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
const gg = {
    a: 23
};
if(gg.a) {
    console.log(gg.a)
}
if(gg.b) {
    console.log('Invisible');
}
if(punto.km) {
    console.log(punto.km);
}
// fusionner des objects
const obj1 = {a:1,b:2};
const obj2 = {c:3};
let fusion = Object.assign({}, obj1,obj2);
console.log(fusion); // {a: 1, b: 2, c: 3}
const obj3 = {a: 'chaine'}
const obj5 = {b: 'hjgdjhzgjhs'}
let fusion2 = Object.assign({},obj1,obj2,obj3,obj5);
console.log(fusion2);

// Fusionner des object avec SPREAD ...
const fusion3 = {...obj1, ...obj2}; //  {a: 1, b: 2, c: 3}
console.log(fusion3);
// Copier un object
let original = {a: 3};
let copy = original;
console.log({original, copy});
copy.a = 15;
console.log({original, copy});
// ici on modifie aussi l'original
// les objects sont copiés par référence
// GoodWay
let original2 = { a: 3};
let copy2 = { ...original2 }
console.log({original2, copy2});
copy2.a = 15;
console.log({original2, copy2});
// Comparer des objects
console.log({} === {}); // false
console.log(original === copy); // true

// Itérer sur un object
const user = {
    name: 'Antoine',
    age: 14
}

for(propriete in user) {
    console.log(propriete)
    console.log(user[propriete])
}
// Object.values()
const user2 = Object.values(user);
console.log(user2); // ['Antoine', 14]
// Object.keys()
const user3 = Object.keys(user);
console.log(user3); // ['name', 'age']
// Object.entries
const user4 = Object.entries(user);
console.log(user4); // [['name', 'Antoine'],['age', 14]]
console.log(user4[1][1]);

// JSON
let norris = '{"categories":[],"created_at":"2020-01-05 13:42:19.324003","icon_url":"https://assets.chucknorris.host/img/avatar/chuck-norris.png","id":"55d0aCZ9TOejWz68jUa4vg","updated_at":"2020-01-05 13:42:19.324003","url":"https://api.chucknorris.io/jokes/55d0aCZ9TOejWz68jUa4vg","value":"This year\'s Chuck Norris Super Sunday Super Bowl party was catered by Chick-fil-A and all other party items delivered by Hobby Lobby"}'
console.log(norris)
// JSON => Object
let norrisObject = JSON.parse(norris);
console.log(norrisObject);
document.write(norrisObject.value);

// Object => JSON
console.log(JSON.stringify(punto));

// copier une Object => BEST WAY
const bobo = {a:1,b:2}
const copyBobo = JSON.parse(JSON.stringify(bobo));
copyBobo.a = 12;
console.log({bobo, copyBobo});

// cloneDeep()














