<?php
/**
* About
* 
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('pheader.php'); ?>

	<body>
        <script>
            if (/mobile/i.test(navigator.userAgent) || /android/i.test(navigator.userAgent))
            {
               document.body.classList.add('mobile');
            }
        </script>
		<div class="inner">
			<h2><?php $this->title() ?></h2>
			<?php $this->content(); ?>
		</div>
	</body>

</html>
