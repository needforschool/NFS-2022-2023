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
        .then(function(data) {
            console.log(data);
        })
        .catch(function(err) {
            console.log(err);
        })
}
getBlague();

