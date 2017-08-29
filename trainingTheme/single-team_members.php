<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();
?>
<h2 style="text-align: center;"><?php echo the_title();?> </h2>

<p style="text-align: center;">
    <?php
        $upload = wp_get_attachment_image( get_post_meta( get_the_ID(), 'imgadv', 1 ), 'thumbnail' );
        echo $upload;
?></p><br>

<h4 style="text-align: center;">
    <?php if(get_post_meta( get_the_ID(), 'email', true)!= NULL){
        echo esc_html( get_post_meta( get_the_ID(), 'email', true ) );
    }
    else{
        echo "Have no Email";
    } ?>
</h4><br>

<h4 style="text-align: center;">
    <?php if (get_post_meta( get_the_ID(), 'phone_number', true ) != NULL ){
          echo esc_html(get_post_meta( get_the_ID(), 'phone_number', true ));
      }
      else{
          echo "Have no phone number";
      } ?>
</h4><br>

<h4 style="text-align: center;">
    <?php if(get_post_meta( get_the_ID(), 'website', true) != NULL){
        echo esc_html( get_post_meta( get_the_ID(), 'website', true));
    }
    else{
        echo "Have no Website";
    } ?>
</h4><br>

<?php get_footer(); ?>
