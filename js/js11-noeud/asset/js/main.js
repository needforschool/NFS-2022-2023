console.log('JS 11 - Noeud');
/////////////////////
// NOEUD
///////////////////////
const app = document.querySelector('#app');
// app.innerText = '<p>Bonjour à tous</p>';
// app.innerHTML = '<p>Bonjour à tous</p>';
// app.classList.add('good');
const img = document.createElement('img');
const imgSrc = document.createAttribute('src');
imgSrc.value = "https://picsum.photos/id/2/200/300";
img.setAttributeNode(imgSrc);

const section = document.createElement('section');

// Création d'un lien (<a>) => a ajouter à la section
    // - <a>texte</a>
    //-> href =>
    // target="_blank"
const link = document.createElement('a');
link.innerText = 'Voir plus';
// const linkHref = document.createAttribute('href');
// linkHref.value = '#';
// link.setAttributeNode(linkHref);
// const linkTarget = document.createAttribute('target');
// linkTarget.value = '_blank';
// link.setAttributeNode(linkTarget);
link.href = '#';
link.target = '_blank';

// p => class="para" => texte
   //  => ajouter à la section
const p = document.createElement('p');
p.classList.add('para');
p.innerText = 'ici un texte';

section.appendChild(img)
section.appendChild(p)
section.appendChild(link)
app.append(section);

///////////
// append, prepend, before, after
//////////////////////////
const h1 = document.querySelector('h1');
// h1.innerText = 'Nouveau Titre'
h1.append('à la fin dans le h1');
h1.append('à la fin dans le h1 numero 2');
h1.prepend('au début dans le h1');
h1.before('Avant le h1');
h1.after('Après le h1');

// Supprimer un noeud 
setTimeout(function() {
    h1.remove();
    link.remove();
}, 2000);

//  EXO
const articles = [
    {title: 'Mon Titre 1', excerpt: 'kllkjlkjlhjgghj   jlk jlk jklj', img: 2},
    {title: 'Mon Titre 2', excerpt: 'kllfkjdfidfsgjdf', img: 78},
    {title: 'Mon Titre 3', excerpt: 'kl lkj  lkjlhjgghj   jlk jlk jklj', img: 56},
    {title: 'Mon Titre 4', excerpt: 'kllkj lkjlhj gghj   jlk jlk jklj', img: 95},
];
// html div id app2
// Création d'une div => id "articles"
    // autant de div class = one_article
        //h2  => titre
        // p => excerpt
        // img => "https://picsum.photos/id/2/200/300";
const app2 = document.querySelector('#app2');
const divBase = document.createElement('div');
divBase.id = 'articles';
articles.forEach((article) => {
    const div = document.createElement('div');
    div.classList.add('one_article');
    // h2
    const title = document.createElement('h2');
    title.innerText = article.title;
    div.appendChild(title)
    // excerpt
    const excerpt = document.createElement('p');
    excerpt.innerText = article.excerpt
    div.appendChild(excerpt);
    // img
    const image = document.createElement('img');
    image.alt = article.title;
    image.src = `https://picsum.photos/id/${article.img}/200/300`;
    div.appendChild(image);
    divBase.appendChild(div);
})
app2.append(divBase);




