<?php


get_header();
?>
<h2 style="text-align: center;"><?php echo the_title();?> </h2>

<p style="text-align: center;">
    <?php
        $upload = wp_get_attachment_image( get_post_meta( get_the_ID(), 'imgadv', 1 ), 'thumbnail' );
        echo $upload;
?></p><br>

<?php
    $posting = array('email', 'phone_number', 'website');
    for ($i=0; $i < 3; $i++) {
        $post_meta = get_post_meta( get_the_ID(), $posting[$i], true);
    ?>
        <h4 style="text-align: center;">
            <?php if( $post_meta != NULL ){
                echo esc_html( $post_meta );
            }
            else{
                echo "Have no Data";
            }
            ?>
        </h4><br>
    <?php
    }
    ?>


<?php get_footer(); ?>
