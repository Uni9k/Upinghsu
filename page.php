<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="main-content page-page">
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time>
		</div>
	</div>
	<div id="post-content" class="post-content">
		<?php parseContent($this); ?>
	</div>
</article>

<div id="post-bottom-bar" class="post-bottom-bar">
	<div class="bottom-bar-inner">
		<div class="bottom-bar-items social-share left">
			<span class="bottom-bar-item">Share : </span>
			<span class="bottom-bar-item bottom-bar-qrcode"><a onMouseOver="show_qrcode()" onMouseOut="hide_qrcode()">QRcode</a></span>
			<img class="qrcode" id="pageqrcode" style="margin: 0 0 0 30px;" width="130" height="130" src="https://api.uni9k.me/qrcode/qrcode.php?w=130&amp;h=130&amp;url=<?php echo urlencode($this->permalink()); ?>" style="display:none">
		</div>
		<div class="bottom-bar-items right">
			<span class="bottom-bar-item"><a href="#footer">↓</a></span>
			<span class="bottom-bar-item"><a href="#">↑</a></span>
		</div>
	</div>
</div>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>