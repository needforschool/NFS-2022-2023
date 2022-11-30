<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS 18 - AJAX Base </title>
</head>
<body>
<button id="btn_demo1">Click ici</button>
<div id="demo1"></div>


<script>
    const btn1 = document.querySelector('#btn_demo1');
    const demo1 = document.querySelector('#demo1');
    function addTextDemo1() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                demo1.innerHTML = this.responseText
            }
        }
        xhttp.open('GET', 'demo1.php', true);
        xhttp.send();
    }

    btn1.addEventListener('click',addTextDemo1);

</script>

</body>
</html>