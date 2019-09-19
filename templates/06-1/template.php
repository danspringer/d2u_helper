<!DOCTYPE html>

<html lang="<?php echo rex_clang::getCurrent()->getCode(); ?>">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		print d2u_addon_frontend_helper::getMetaTags();
	?>
	<link rel="stylesheet" href="/index.php?template_id=06-1&d2u_helper=template.css">
	<?php
		if(file_exists(rex_path::media('favicon.ico'))) {
			print '<link rel="icon" href="'. rex_url::media('favicon.ico') .'">';
		}
	?>
</head>

<body id="body">
	<div class="container">
		<div class="row" id="paper-sheet">
			<div class="col-12">
				<header>
					<div class="row">
						<div class="col-12">
							<?php
								if(rex_config::get("d2u_helper", "template_header_pic", "") != "") {
									$media_background = rex_media::get(rex_config::get("d2u_helper", "template_header_pic"));
									print '<img src="'. rex_url::media($media_background->getFileName()) .'" alt="'. $media_background->getTitle() .'" id="header-image">';
								}
								if(rex_config::get("d2u_helper", "template_logo", "") != "") {
									$media_logo = rex_media::get(rex_config::get("d2u_helper", "template_logo"));
									print '<a href="' . rex_getUrl(rex_article::getSiteStartArticleId()) . '">';
									print '<img src="'. rex_url::media($media_logo->getFileName()) .'" alt="'. $media_logo->getTitle() .'" id="logo-top">';
									print '</a>';
								}
							?>
						</div>
					</div>
				</header>
				<div class="row">
					<div class="col-12 col-lg-3">
						<navi>
							<?php
								if(rex_addon::get('d2u_helper')->isAvailable()) {
									d2u_mobile_navi_smartmenus::getMenu();
								}
							?>
						</navi>
					</div>
					<div class="col-12 col-lg-9">
						<article>
							<div class="row">
								<?php
									// Content follows
									print $this->getArticle();
								?>
							</div>
						</article>
					</div>
				</div>
				<footer>
					<div class="row">
						<div class="col-12 col-sm-8 col-lg-7 offset-lg-3" id="footer-left">
							<?php
								$rex_articles = rex_article::getRootArticles(true);
								$show_separator = false;
								foreach($rex_articles as $rex_articles) {
									if($show_separator) {
										print "&nbsp;&nbsp;|&nbsp;&nbsp;";
									}
									print '<a href="'. $rex_articles->getUrl() .'">'. $rex_articles->getName() .'</a>';
									$show_separator = true;
								}
							?>
						</div>
						<div class="col-12 col-sm-4 col-lg-2" id="footer-right">
							<?php
								if(rex_config::get("d2u_helper", "template_logo", "") != "") {
									$media_logo = rex_media::get(rex_config::get("d2u_helper", "template_logo"));
									print '<a href="' . rex_getUrl(rex_article::getSiteStartArticleId()) . '">';
									print '<img src="'. rex_url::media($media_logo->getFileName()) .'" alt="'. $media_logo->getTitle() .'" id="logo-footer">';
									print '</a>';
								}
							?>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>