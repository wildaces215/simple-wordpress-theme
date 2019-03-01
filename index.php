<?php get_header(); ?>

<?php get_template_part('jumbotron',get_post_format());?>

<div class="container">

<div class="row">

<div class="col-sm-8">
<?php if( have_posts() ): while ( have_posts() ): the_post();?>
<?php get_template_part('content',get_post_format());?>
<?php endwhile; else: ?>
<?php endif; ?>

</div><!-- col-sm-8-->
<div class="col-sm-4">
<?php if(!is_single() ): get_sidebar();?>
<?php else:echo "what";?>
<?php endif; ?>
<?php ?>



</div>
<!-- col-sm-4 card--->

</div>
<!--row-->

</div>
<!-- container--->
<?php get_footer(); ?>