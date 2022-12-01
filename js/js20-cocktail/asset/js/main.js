//
const letters = document.querySelector('#letters');
const cocktails = document.querySelector('#cocktails');

// generate btn letter
const allLetters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

allLetters.forEach(function(l) {
    const btn = document.createElement('button');
    btn.innerText = l;
    btn.dataset.letter = l
    btn.addEventListener('click', function() {
        getCocktailByLetter(l);
    });
    letters.append(btn);
});


async function getCocktailByLetter(letter = 'a') {
    let response = await fetch('https://www.thecocktaildb.com/api/json/v1/1/search.php?f='+letter)
    let data = await response.json();
    let cocks = data.drinks;
    cocktails.innerHTML = '';
    cocks.forEach(function(c) {
        console.log(c)
        const div = document.createElement('div');
        const a = document.createElement('a');
        const img = document.createElement('img');
        const h2 = document.createElement('h2');
        div.classList.add('one_cocktail');
        a.href = '';
        a.addEventListener('click', function(evt) {
            evt.preventDefault();
            getDetailCocktailById(c.idDrink)
        })
        img.src = c.strDrinkThumb;
        h2.innerText = c.strDrink;
        a.appendChild(img);
        div.appendChild(a);
        div.appendChild(h2);
        cocktails.append(div)
    });

    // btn actif
    const allbtn = document.querySelectorAll('#letters button')
    allbtn.forEach(function(bt) {
        if(bt.dataset.letter == letter) {
            bt.classList.add('active')
        } else {
            if(bt.classList.contains('active')) {
                bt.classList.remove('active')
            }
        }
    });
}
getCocktailByLetter();


async function getDetailCocktailById(id) {
    let response = await fetch('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i='+id)
    let data = await response.json();
    console.log(data);
    const currentCocktail = data.drinks[0];
    cocktails.innerHTML = '';
    const div = document.createElement('div');
    const img = document.createElement('img');
    const h2 = document.createElement('h2');
    const p = document.createElement('p');
    img.src = currentCocktail.strDrinkThumb;
    h2.innerText = currentCocktail.strDrink;
    p.innerText = currentCocktail.strInstructions;
    div.appendChild(h2);
    div.appendChild(img);
    div.appendChild(p);

    // ingredients
    const ul = document.createElement('ul');
    for(let i = 0; i < 15; i++) {
        if(currentCocktail['strIngredient'+ i] != null) {
            const li = document.createElement('li');
            li.innerHTML = `<li>${currentCocktail['strIngredient'+ i]} : ${currentCocktail['strMeasure'+ i]}</li>`
            ul.appendChild(li)
        }
    }
    div.appendChild(ul);
    cocktails.append(div);

    // inactive all button
    const allbtn = document.querySelectorAll('#letters button')
    allbtn.forEach(function(bt) {
        if(bt.classList.contains('active')) {
            bt.classList.remove('active')
        }
    });
}