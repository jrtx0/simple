<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>

<div class="footer">
    <a href="/archive">归档</a>
    <a href="/index.php/about.html">关于</a>
    <div class="powered_by">
        <a href="http://jrtx.tech:5800">&copy;<?php echo date('Y'); ?></a>
        <a href="http://jrtx.tech:5800" target="_blank">Designed by JRTx,Powered by Typecho.</a>
    </div>

    <div class="footer_slogan">
        <img src="<?php $this->options->themeUrl(); ?>images/font.svg" alt="重拾写作的乐趣" />
    </div>
</div>

<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/analytics.js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/fonts.js"></script>

<?php $this->footer(); ?>
</body>

</html>