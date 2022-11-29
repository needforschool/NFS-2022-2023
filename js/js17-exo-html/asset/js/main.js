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
