console.log('js 7');
///////////////////////
// Fonction
///////////////////////
// déclaration de la fonction
function getHello()
{
    console.log('Hello World!');
}

getHello();
getHello();
getHello();
// arguments
function getUser(prenom = 'Michel')
{
    console.log('Bonjour ' + prenom);
}
getUser('Antoine');
getUser('Jacky');
getUser();

function multiplication(chiffre1,chiffre2 = 2)
{
    let result = parseFloat(chiffre1) * parseFloat(chiffre2);
    console.log(result.toFixed(2));
}

multiplication(10,85); // 850
multiplication(2,5);   // 10
multiplication(2);   // 4

// expression de fonction
const division = function(chiffre1,chiffre2) {
    let result = parseFloat(chiffre1) / parseFloat(chiffre2);
    return result.toFixed(2);
}

let resultatDivision = division(34,78);
console.log(resultatDivision);
// fonction fléchée
const addition = (chiffre1,chiffre2) => {
    return parseFloat(chiffre1) + parseFloat(chiffre2);
}
let resultatAddition = addition(15,458);
console.log(resultatAddition);

// Object d'arguments
function ajouter()
{
    console.log(arguments);
    let total = 0;
    let countArgument = arguments.length;
    let fruits = ['Banane', 'Kiwi'];
    for(let i = 0; i < countArgument; i++) {
        total += parseFloat(arguments[i]);
    }
    const data = {
        total: total,
        fruits: fruits,
        count: countArgument
    }
    return data;
    // return total;
    // return fruits;
    // return countArgument;
}


let data = ajouter(45,786,454,5467,4654,768765,55456,465465,4585,545);
console.log(data);
console.log(data.total);
console.log(data.count);
console.log(data.fruits[1]);

function calculGenerale(prenom, ...numbers)
{
    let total = 0;
    console.log(numbers);
    numbers.forEach((n) => {
        total += parseFloat(n);
    });

    return 'Bonjour ' + prenom + ' , votre salaire est de ' + total.toFixed(2);
}

let resultat1 = calculGenerale('antoine',45,76,654,5465,654,654);
console.log(resultat1);
