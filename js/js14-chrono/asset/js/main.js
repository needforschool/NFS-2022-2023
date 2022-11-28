console.log('chronos');
// Date, asyn => setTimeOut, setInterval
// Chronomètre en ligne

let date = new Date();
console.log(date); // Mon Nov 28 2022 12:41:20 GMT+0100 (heure normale d’Europe centrale)
console.log(date.getFullYear()); // 2022
console.log(date.getDay()); // 1
console.log(date.getHours()); // 12
console.log(date.getMinutes()); // 47
console.log(date.getSeconds()); // 47
console.log(date.getMonth()); // 10  => Novembre

// setTimeOut
setTimeout(function() {
    console.log('set Time out 2 secondes')
}, 2000);

// setInterval
let interval = setInterval(function() {
    console.log('ok set interval')
}, 1000);
const stop = document.querySelector('#stop');
stop.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('STOP');
    clearInterval(interval);
})






