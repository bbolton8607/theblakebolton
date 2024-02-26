
            <div class="footer mastadon">
                <div class="footer-social">
                    <a href="<?php echo esc_html(get_field('footer')['github_link']); ?>" target="_blank" class="footer-social-icon">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                
                <p class="footer-copyright">All Rights Reserved. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
            </div>
        <?php wp_footer(); ?>
    </body>
</html>