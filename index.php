<?php
/**
 * Simple theme designed by JRTx
 * 
 * @package Simple
 * @author JRTx
 * @version 0.0.1
 * @link http://jrtx.tech:5800
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('iheader.php');
?>

	<div class="outer">
	    <ul class="list-group">
		    <?php while($this->next()): ?>
		        <li class="list-group-item title">
		            <div class="date"><?php $this->date('Y年m月d日') ?></div><br>
		            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		        </li>
		    <?php endwhile; ?>
	    </ul>
	</div>
</body>

</html>
