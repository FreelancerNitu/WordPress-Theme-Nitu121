<?php 
//The template displaying for Image
get_header(); 

?>
<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php get_template_part('template_part/post_setup'); ?>
        <!-- <img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>"> -->
        <!-- Secure away  -->
        <img src="<?php echo esc_url($post->guid); ?>" alt="<?php esc_attr( get_the_title()) ?>">
      </div>
    </div>
  </div>

</section>
<div class=" container">
  <div class="row">
    <div class="col-md-12">
      <h1 style="color:red;">Template: Image.php</h1s>
    </div>
  </div>
</div>
<?php 
//The main template footer
get_footer(); 

?>