</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <?php wp_nav_menu( array(
        'theme_location' => 'my-custom-menu',
        'container_class' => 'custom-menu-class' ) );
    ?>
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p><a href="#">Back to top</a></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
