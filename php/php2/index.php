<?php
$url = 'https://www.php.net/';
$alt = 'Logo php';
$width = 200;
$image = 'https://cdn.alsacreations.net/xmedia/doc/full/php-logo.png';
// EXO
// 3 méthodes
?>
<a href="<?php echo $url; ?>" target="_blank">
    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width ?>px">
</a>
<?php
echo '<a href="' . $url . '" target="_blank"><img src="'.$image.'" alt="'.$alt.'" width="'.$width.'px"></a>';

$html = '';
$html .= '<a href="'.$url.'" target="_blank">';
    $html .= '<img src="'.$image.'" alt="'.$alt.'" width="'.$width.'px">';
$html .= '</a>';
echo $html;

// EXO 2
$title = 'Les fruits de bernard';
$content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores dicta doloremque dolores ea eum ipsa magni omnis optio quaerat!';
$fruits = array('Banane','Kiwi','Papaye','Tomate', 'Courgette');
echo '<pre>';
print_r($fruits);
echo '</pre>';
// 3 méthodes
// section id => fruits
    // h2 class "title"  => $titre
    // p class "content" => $content
    // ul class  "liste"
        // un li par fruit






