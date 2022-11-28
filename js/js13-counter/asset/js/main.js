const link = document.querySelector('#js_link');
const counter = document.querySelector('.counter');

link.addEventListener('click', function(evt) {
    evt.preventDefault();
    let newCount = parseInt(counter.innerHTML) + 1;
    counter.innerText = newCount;
});

// Formulaire
// const input = document.querySelector('#nom');
// const errorNom = document.querySelector('#error_nom');
// console.log(input);
// blur
// input.addEventListener('keyup', function() {
//     console.log(input.value);
//     let longueur = input.value.length
//     let text = '';
//     let classError = 'error';
//     if(input.value != '') {
//         if(longueur < 3 ) {
//             text = 'Veuillez renseigner min 3 caractères';
//         } else if (longueur > 70) {
//             text = 'Veuillez renseigner max 70 caractères';
//         } else {
//             text = 'Bravo, vous avez écrit ' + longueur + ' caractères';
//             classError = 'success';
//         }
//     } else {
//         text = 'Veuillez renseigner ce champ';
//     }
//     errorNom.innerHTML = text;
//     errorNom.className = classError;
// });


function validationInput(id,min,max) {
    const input = document.querySelector('#' + id);
    const error = document.querySelector('#error_' + id);

    input.addEventListener('blur', function() {
        console.log(input.value);
        let longueur = input.value.length
        let text = '';
        let classError = 'error';
        if(input.value != '') {
            if(longueur < min ) {
                text = 'Veuillez renseigner min '+min+' caractères';
            } else if (longueur > max) {
                text = 'Veuillez renseigner max '+max+' caractères';
            } else {
                text = 'Bravo, vous avez écrit ' + longueur + ' caractères';
                classError = 'success';
            }
        } else {
            text = 'Veuillez renseigner ce champ';
        }
        error.innerHTML = text;
        error.className = classError;
    });
}
validationInput('nom',3,70);
validationInput('prenom',5,50);


// SELECT => fruits
const select = document.querySelector('#fruits');
select.addEventListener('change', function(evt) {
    evt.target.style.backgroundColor = evt.target.options[evt.target.selectedIndex].dataset.color;
});