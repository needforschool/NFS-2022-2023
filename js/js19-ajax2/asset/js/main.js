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
            console.log(data)
        })
})