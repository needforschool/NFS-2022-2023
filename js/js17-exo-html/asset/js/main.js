console.log('js 17');

// burger

const box_burger = document.querySelector('#menu_burger');
const btn_open = document.querySelector('#opener_burger');
const btn_close = box_burger.querySelector('#closer');
btn_open.addEventListener('click', function(e) {
    e.preventDefault();
    box_burger.classList.add('opened');
});

btn_close.addEventListener('click', function(e) {
    e.preventDefault();
    box_burger.classList.remove('opened');
})
// diaporama
$(window).on('load',function() {
    $('#diaporama').flexslider({
        animation: "slide",
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false,
        after: function(slider){
            console.log(slider)
        },
    });
});


// dropdown
const fruits = [
    {title: 'Banane', content: '111 dfslkjhfskd flksdj fsldk jlk', img: 12},
    {title: 'Litchi', content: 'hkjhhs222fkjfhkj', img: 2},
    {title: 'Kiwi', content: 'hkjhhs333fkjfhkj', img: 1},
    {title: 'Papaye', content: 'hkjhh44sfkj fgdgdffhkj', img: 122},
];
const reponse = document.querySelector('#reponse')
const dropdown = document.querySelector('#dropdown');

function changeContentDropDown(index) {
    reponse.innerHTML = '';
    const p = document.createElement('p');
    p.innerText = fruits[index].content
    const img = document.createElement('img');
    img.alt = fruits[index].title
    img.src = `https://picsum.photos/id/${fruits[index].img}/200/300`
    reponse.append(p)
    reponse.append(img)
}
// init
changeContentDropDown(0);

//create link
const link = document.createElement('a');
link.href = '';
link.classList.add('btn_dropdown')
link.innerText = fruits[0].title;

// create ul with li
const ul = document.createElement('ul');
fruits.forEach( function(f, index) {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.href = '';
    a.innerText = f.title
    li.appendChild(a)
    a.addEventListener('click', function(evt) {
        evt.preventDefault();
        ul.classList.remove('opened');
        link.innerText = f.title
        changeContentDropDown(index)
    })
    ul.appendChild(li);
});
link.addEventListener('click', function(evt) {
    evt.preventDefault();
    ul.classList.toggle('opened');
})
dropdown.append(link)
dropdown.append(ul)