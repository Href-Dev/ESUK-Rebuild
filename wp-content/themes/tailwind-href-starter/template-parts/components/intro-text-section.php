<?php 
// INTRO TEXT SECTION

/**
 * This is for the intro text section.
 * Clone the component and use the field as the arguments in the template-part:
 * eg. <?php get_template_part('template-parts/components/intro-text-section', 'null', array('field' => $intro_text_fields))); ?>
 * 
 * =============================================================================================================
 * 
 * In your block.php file, add the following code within your data array:
 * 
 * 'intro_text_section' => get_field('intro_text') ?? false,
 * 
 * and in your template.php file, add the following code to your var declarations:
 * 
 * $intro_text_section = $args['intro_text_section'];
 * 
 * =============================================================================================================
 * 
 * You can use the get_template_part function to include the component in your template.php file.
 */


$heading = $args['heading'];
$subtext = $args['subtext'];
$button = $args['button'];

?>

<div class="intro-text-section flex flex-col gap-24 items-center justify-center">
    <h2 class="heading" data-animate="fade-in">
        <?php echo $heading; ?>
    </h2>
    <div class="subtext" data-animate="fade-in">
        <?php echo $subtext; ?>
    </div>
    <?php echo acf_link($button, 'btn'); ?>
</div>