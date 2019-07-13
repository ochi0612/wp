<div class="footer__bace">
    <footer class="footer">
        <nav class="footer__nav clearfix">
            <ul class="footer__nav__list clearfix">
                <?php echo nav_btn('footer'); ?>
            </ul>
        </nav>
    </footer>
    <div class="copyright">
        <div class="copyright__inner">
            <div class="copyright__icons clearfix">
                <div class="copyright__title">
                    <a href="https://gizumo-inc.jp">
                        <img src="https://gizumo-inc.jp/wp-content/themes/gizumo/images/common/footer_logo.svg" class="copyright__title__logo">
                    </a>
                </div>
                <ul class="sns-icon clearfix">
                    <?php echo sns_btn(); ?>
                </ul>
            </div>
            <div class="footer-link clearfix">
                <ul>
                    <li class="footer-bar"><a href="/site-map/">サイトマップ</a></li>
                    <li class="footer-bar"><a href="/privacy-policy/">プライバシーポリシー</a></li>
                </ul>
            </div>
            <p class="copyright__body">©2019 Gizumo inc .</p>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>

</html>