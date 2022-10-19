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










