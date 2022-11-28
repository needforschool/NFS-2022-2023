console.log('HORLOGE');
const spans = document.querySelectorAll('#hour span');
const phrase = document.querySelector('#day');
const jourSemaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']
const allMonth = ['Janvier','Février','Mars','Avril','Mai','Juin', 'juillet','Aout','septembre','octobre','novembre','décembre'];

setInterval(function() {
    let date = new Date();
    // hour
    let hour = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();
    if(hour < 10) {hour = '0' + hour;}
    if(minute < 10) {minute = '0' + minute;}
    if(second < 10) {second = '0' + second;}
    spans[0].innerText = hour
    spans[1].innerText = minute
    spans[2].innerText = second
    // date
    phrase.innerText = `${jourSemaine[date.getDay()]} ${date.getDate()} ${allMonth[date.getMonth()]} ${date.getFullYear()}`;
}, 1000);