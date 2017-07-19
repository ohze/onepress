<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-connect">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                <div class="col-sm-8">
                                <div class="footer-social">
                        <h5 class="follow-heading">Kết Nối Ohze</h5>
                        <div class="footer-social-icons">
                            <a target="_blank" href="https://www.facebook.com/sandinh.game"
                               title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCIMmvyinwDgAiOyKll_BsLQ"
                            title="Youtube">
                            <i
                            class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>

        <div class="site-info">
            <div class="container">
                    <div class="btt">
                <a class="back-top-top" href="#page" title="Back To Top"><i class="fa fa-angle-double-up wow flash"
                                                                            data-wow-duration="2s"></i></a>
                    </div>
            Copyright &copy; 2017 Ohze JSC
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
<?php
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
