<footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <nav class="footer__nav">
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__link" href="#">About Us</a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__link" href="#">How it Works</a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__link" href="#">FAQ</a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__link" href="#">Contact Us</a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__link" href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </nav>
                    <a href="<?php echo home_url(); ?>" class="footer__logo-link" >
                        <img class="footer__logo logo" src="<?php bloginfo( 'template_url' ) ?>./assets/images/logo-arch.svg" alt="logo">
                    </a>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>