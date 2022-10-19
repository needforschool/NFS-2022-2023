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
?>
<section id="fruits">
    <h2 class="title"><?php echo $title; ?></h2>
    <p class="content"><?php echo $content; ?></p>
    <ul>
        <li><?php echo $fruits[0]; ?></li>
        <li><?php echo $fruits[1]; ?></li>
        <li><?php echo $fruits[2]; ?></li>
        <li><?php echo $fruits[3]; ?></li>
        <li><?php echo $fruits[4]; ?></li>
    </ul>
</section>
<?php
echo '<section id="fruits">
    <h2 class="title">'.$title.'</h2>
    <p class="content">'. $content.'</p>
    <ul>
        <li>'. $fruits[0].'</li>
        <li>'. $fruits[1].'</li>
        <li>'. $fruits[2].'</li>
        <li>'. $fruits[3].'</li>
        <li>'. $fruits[4].'</li>
    </ul>
</section>';

$html = '';
$html .= '<section id="fruits">';
    $html .= '<h2>'.$title.'</h2>';
    $html .= '<p>'.$content.'</p>';
    $html .= '<ul>';
        $html .= '<li>'. $fruits[0].'</li>';
        $html .= '<li>'. $fruits[1].'</li>';
        $html .= '<li>'. $fruits[2].'</li>';
        $html .= '<li>'. $fruits[3].'</li>';
        $html .= '<li>'. $fruits[4].'</li>';
    $html .= '</ul>';
$html .= '</section>';
echo $html;





