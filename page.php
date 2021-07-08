<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="autopagerize_page_element">
    <div class="content">
        <div class="post_page">
            <div class="post animated fadeInDown">

                <div class="post_title post_detail_title">
                    <h2>
                        <a><?php $this->title() ?></a>
                    </h2>
                    <span class="date"><?php $this->date('F j, Y'); ?> by <?php $this->author(); ?></span>
                </div>

                <div class="post_content markdown">
                    <?php $this->content(); ?>
                </div>

                <div class="post_footer">
                    <div class="meta">
                        <div class="info">
                            <span class="field tags">
                                <i class="fa fa-flask"></i>
                                <?php $this->category(','); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="share">
                    <div class="evernote">
                        <a href="javascript:(function(){EN_CLIP_HOST='';try{var%20x=document.createElement('SCRIPT');x.type='text/javascript';x.src=EN_CLIP_HOST+'/public/bookmarkClipper.js?'+(new%20Date().getTime()/100000);document.getElementsByTagName('head')[0].appendChild(x);}catch(e){location.href=EN_CLIP_HOST+'/clip.action?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title);}})();"
                            ref="nofollow" target="_blank" class="fa fa-bookmark"></a>
                    </div>

                    <div class="weibo">
                        <a href="javascript:void((function(s,d,e){try{}catch(e){}var f='#',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"
                            class="fa fa-weibo"></a>
                    </div>

                    <div class="twitter">
                        <a href="jrtx_tech"
                            class="fa fa-twitter"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>