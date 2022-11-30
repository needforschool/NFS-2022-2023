<?php
require('../inc/function.php');
$tab = [
    'html1' => 'Hello html 1',
    'html2' => 'Hello html 2',
    'color1' => 'red',
    'color2' => 'orange',
    'notes' => array(
        'maths' => 12,
        'php' => 15
    )
];
showJson($tab);