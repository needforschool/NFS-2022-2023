console.log('ok');

// test 1
const btn_test1 = document.querySelector('#btn_test1');
const response_test1 = document.querySelector('#js_response_test');

function getTest1() {
    btn_test1.disabled = true
    fetch('ajax/test1.php')
        .then(function(response) {
            console.log(response);
            return response.json();
        })
        .then(function(data) {
            console.log(data);
            response_test1.innerText = data
            btn_test1.disabled = false
        })
        .catch(function(error) {
            console.log(error)
        });
}

btn_test1.addEventListener('click', getTest1)


// test 2
const btn_test2 = document.querySelector('#btn_test2');
const response_test2 = document.querySelector('#js_response_test_2');
btn_test2.addEventListener('click', function() {
    fetch('ajax/test2.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data)
            response_test2.innerText = data
        })
})

// test 3
const btn_test3 = document.querySelector('#btn_test3');
const response_test3 = document.querySelector('#js_response_test_3');
btn_test3.addEventListener('click', function() {
    fetch('ajax/test3.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data);
            // SOLUTION 1
            // let html = `<p style="color:${data.color1};">${data.html1}</p>
            // <p style="color:${data.color2};">${data.html2}</p>
            // <p>Maths: ${data.notes.maths}, PHP: ${data.notes.php}</p>`;
            //
            // response_test3.innerHTML = html

            // SOLUTION 1
            const p1 = document.createElement('p');
            const p2 = document.createElement('p');
            const p3 = document.createElement('p');

            p1.style.color = data.color1;
            p1.innerText = data.html1;
            p2.style.color = data.color2;
            p2.innerText = data.html2;
            p3.innerText = `Maths: ${data.notes.maths}, PHP: ${data.notes.php}`;
            response_test3.append(p1);
            response_test3.append(p2);
            response_test3.append(p3);
        });
});
7

// test 4
const btn_test4 = document.querySelector('#btn_test4');
const response_test4 = document.querySelector('#js_response_test_4');
btn_test4.addEventListener('click', function() {
    fetch('ajax/test4.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            response_test4.innerHTML = '';
            data.forEach(function(ville) {
                console.log(ville);
                const div = document.createElement('div');
                const h2 = document.createElement('h2');
                const p = document.createElement('p');
                h2.innerText = ville.Name
                p.innerText = ville.District
                div.appendChild(h2)
                div.appendChild(p)
                response_test4.append(div)
            });
        })
});




// API 1 => https://api.chucknorris.io/
const response_norris = document.querySelector('#response_norris');
function getBlague() {
    fetch('https://api.chucknorris.io/jokes/random')
        .then(function(response) {
            return response.json();
        })
        .then(function(blague) {
            console.log(blague.value);
            response_norris.innerHTML = blague.value
        })
        .catch(function(err) {
            console.log(err);
        })
}
getBlague();

// api
// https://dog.ceo/api/breeds/image/random
// au clic sur un btn => afficher une nouvelle image d'un chien
const btn_dog = document.querySelector('#btn_dog');
const response_dog = document.querySelector('#js_response_dog');

async function getDogImage() {
    try {
        let response = await fetch('https://dog.ceo/api/breeds/image/random')
        let data = await response.json();
        console.log(data);
        const img = document.createElement('img');
        img.src = data.message
        response_dog.prepend(img);
    } catch (e) {
        console.log(e)
    }
}
btn_dog.addEventListener('click', getDogImage);

//
const btn_pixel = document.querySelector('#btn_pixel');
const response_pixel = document.querySelector('#js_response_pixel');

async function getImages() {
    let response = await fetch('https://picsum.photos/v2/list?limit=5')
    let images = await response.json();
    console.log(images);
    response_pixel.innerHTML = '';
    images.forEach(function(i) {
        const image = document.createElement('img');
        image.src = i.download_url
        image.alt = i.author
        response_pixel.append(image)
    });
}
btn_pixel.addEventListener('click', getImages)