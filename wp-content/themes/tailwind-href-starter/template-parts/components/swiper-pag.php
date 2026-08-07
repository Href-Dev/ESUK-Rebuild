<?php
$pagination_colour = $args['pagination_colour'];

$class_list = '';
if ($pagination_colour) {
    $class_list .= 'text-' . $pagination_colour;
}
?>

<div class="swiper-pag <?php echo $class_list; ?>"></div>