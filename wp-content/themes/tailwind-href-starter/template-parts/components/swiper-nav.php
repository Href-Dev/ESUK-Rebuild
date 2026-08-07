<?php
$nav_colour = $args['nav_colour'];

$class_list = '';
if ($nav_colour) {
    $class_list .= ' text-' . $nav_colour;
}
?>

<div class="swiper-nav flex gap-16 items-center justify-center <?php echo $class_list; ?>">
    <button class="swiper-btn swiper-btn-prev">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" fill="currentColor"/>
        </svg>
    </button>
    <button class="swiper-btn swiper-btn-next">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="currentColor"/>
        </svg>
    </button>
</div>