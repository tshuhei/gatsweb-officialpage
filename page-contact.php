<?php get_header(); ?>

<div class="c-contact">
	<div class="c-contact-top">
		<img class="c-contact-top-arrow up" src="<?php echo get_theme_file_uri(); ?>/images/left-arrow.png">
		<p class="c-contact-top-str up">Contact</p>
		<img class="c-contact-top-arrow up" src="<?php echo get_theme_file_uri(); ?>/images/right_arrow.png">
	</div>
	<p class="c-contact-copy up">まずはお気軽にご相談ください</p>
	<!-- <p class="c-contact-tell">Tell：123-1234-1234</p> -->
	<p class="c-contact-email up">Email：contact@gatsweb.com</p>
	<p class="c-contact-description up">
	お見積もりのご相談やWebサイト開設に関してのご相談など、些細なことでもお気軽にお問い合わせください。
	</p>
</div>

<div class="c-contact-form-wrapper">
	<?php echo do_shortcode('[contact-form-7 id="15" title="コンタクトフォーム 1"]');?>
	<!-- <form class="c-contact-form" action="/wordpress" method="get">
		<div class="c-contact-form-item">
			<label class="c-contact-form-label" for="name">お名前</label>
			<input class="c-contact-form-input" type="text" name="name">
		</div>
		<div class="c-contact-form-item">
			<label class="c-contact-form-label" for="email">メールアドレス</label>
			<input class="c-contact-form-input" type="email" name="email">
		</div>
		<div class="c-contact-form-item">
			<label class="c-contact-form-label" for="phone">電話番号</label>
			<input class="c-contact-form-input" type="text" name="phone">
		</div>
		<div class="c-contact-form-item">
			<label class="c-contact-form-label" for="content">お問い合わせ内容</label>
			<textarea class="c-contact-form-input" name="content" rows="5"></textarea>
		</div>
		<div class="c-contact-form-button-wrapper">
			<input class="c-contact-form-button" type="submit" value="送信">
		</div>
	</form> -->
</div>

<?php get_footer();?>