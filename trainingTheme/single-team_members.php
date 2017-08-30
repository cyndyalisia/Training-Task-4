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
    for ($i=0; $i < 3; $i++) { ?>
        <h4 style="text-align: center;">
            <?php if(get_post_meta( get_the_ID(), $posting[$i], true) != NULL ){
                echo esc_html( get_post_meta( get_the_ID(), $posting[$i], true ) );
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
