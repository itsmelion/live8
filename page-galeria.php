<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>
<?php
	$fields = get_fields(get_the_ID());
	the_post();
?>

<?php the_post(); ?>
<?= $fields['corpo'];?>

<?php include( locate_template( 'partials/combo.php', false, false ) ); ?>

<?php get_footer(); ?>