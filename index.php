<?php
/**
 * 简单主题，移植自https://blog.caicai.me/ .
 * 
 * @package Simple
 * @author JRTx
 * @version 0.0.1
 * @link http://jrtx.tech:5800
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
 
<div class="autopagerize_page_element">
    <div class="content">
        <?php while($this->next()): ?> 
            <div class="post animated fadeInDown">
                <div class="post_title">
                    <h2>
                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h2>
                </div>

                <div class="list">
                    <div class="post_content">
                        <p><?php $this->excerpt(180, '[...]'); ?></p>
                    </div>
                </div>

                <div class="post_footer">
                    <div class="meta">
                        <div class="info">
                            <span class="field">
                                <i class="fa fa-sun-o"></i>
                                <span class="date"><?php $this->date('F j, Y'); ?></span>
                            </span>
                            <span class="field">
                                <i class="fa fa-comment-o"></i>
                                <span><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
                            </span>
                            <span class="field tags">
                                <i class="fa fa-flask"></i>
                                <?php $this->category(','); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="paginator pager pagination">
            <div class="paginator_container pagination_container">
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                <div style="clear:both;height:0;"></div>
            </div>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>