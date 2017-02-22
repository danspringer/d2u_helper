<?php
if(!rex::isBackend()) {
	// If stylesheet is requested
	if (rex_request('d2u_helper', 'string') == 'helper.css') {
		sendD2UHelperCSS();
	}
	else if (rex_request('d2u_helper', 'string') == 'helper.js') {
		if(rex_request('position', 'string') == "head") {
			sendD2UHelperJS("head");
		}
		else {
			sendD2UHelperJS("body");
		}
	}
	else if (rex_request('d2u_helper', 'string') == 'template.css' && rex_request('template_id', 'string') != "") {
		sendD2UHelperTemplateCSS(rex_request('template_id', 'string'));
	}
	
	// Only frontend call
	rex_extension::register('OUTPUT_FILTER', 'appendToPageD2UHelperFiles');
}
else {
	rex_extension::register('MEDIA_IS_IN_USE', 'rex_d2u_helper_media_is_in_use');
}

/**
 * Adds some style and script stuff to the header
 * @param rex_extension_point $ep Redaxo extension point
 */
function appendToPageD2UHelperFiles(rex_extension_point $ep) {
	$addon = rex_addon::get("d2u_helper");

	$insert_head = "";
	$insert_body = "";
	// Vor dem </head> einfügen
	if($addon->getConfig('include_bootstrap') == 'true') {
		// Bootstrap CSS
		$insert_head .= '<link rel="stylesheet" type="text/css" href="'.  $addon->getAssetsUrl('bootstrap4/bootstrap.min.css') .'" />' . PHP_EOL;
		// JavaScript
		$insert_head .= '<script type="text/javascript" src="'. $addon->getAssetsUrl('bootstrap4/jquery.min.js') .'"></script>' . PHP_EOL;
		$insert_head .= '<script type="text/javascript" src="'. $addon->getAssetsUrl('bootstrap4/tether.min.js') .'"></script>' . PHP_EOL;
	}

	$helper_css = FALSE;
	if($addon->hasConfig("include_module") && $addon->getConfig("include_module") == "true") {
		// Module stuff
		$module_manager = new D2UModuleManager(D2UModuleManager::getD2UHelperModules());
		if($module_manager->getAutoCSS() != "") {
			$helper_css = TRUE;
		}
	}
	if($addon->hasConfig("include_menu") && $addon->getConfig("include_menu") == "true") {
		// Menu stuff
		$helper_css = TRUE;
		}
	if($helper_css) {
		$insert_head .= '<link rel="stylesheet" type="text/css" href="index.php?d2u_helper=helper.css" />' . PHP_EOL;
	}
		
	$helper_head_js = FALSE;
	// Menu stuff in header
	if($addon->hasConfig("include_module") && $addon->getConfig("include_module") == "true") {
		$helper_head_js = TRUE;
	}
	if($helper_head_js) {
		$insert_head .= '<script type="text/javascript" src="index.php?position=head&d2u_helper=helper.js"></script>' . PHP_EOL;
	}

	$ep->setSubject(str_replace('</head>', $insert_head .'</head>', $ep->getSubject()));

	// Vor dem </body> einfügen
	if($addon->getConfig('include_bootstrap') == 'true') {
		$insert_body .= '<script type="text/javascript" src="'. $addon->getAssetsUrl('bootstrap4/bootstrap.min.js') .'"></script>' . PHP_EOL;
	}

	$helper_body_js = FALSE;
	// Module stuff in body
	if($addon->hasConfig("include_module") && $addon->getConfig("include_module") == "true") {
		$module_manager = new D2UModuleManager(D2UModuleManager::getD2UHelperModules());
		if($module_manager->getAutoJS() != "") {
			$helper_body_js = TRUE;
		}
	}
	if($helper_body_js) {
		$insert_body .= '<script type="text/javascript" src="index.php?position=body&d2u_helper=helper.js"></script>' . PHP_EOL;
	}
	$ep->setSubject(str_replace('</body>', $insert_body .'</body>', $ep->getSubject()));
}

/**
 * Apply colors from settings
 * @param string $css CSS string
 * @return string replaced CSS
 */
function applyColorToCSS($css) {
	$d2u_helper = rex_addon::get('d2u_helper');

	// Apply template color settings
	$colors = ['navi_color_bg', 'navi_color_font', 'navi_color_hover_bg', 'navi_color_hover_font',
		'subhead_color_bg', 'subhead_color_font',
		'article_color_bg', 'article_color_h', 'article_color_box',
		'footer_color_bg', 'footer_color_box'];
	foreach($colors as $color) {
		if($d2u_helper->hasConfig($color)) {
			$css = str_replace($color, $d2u_helper->getConfig($color), $css);
		}
	}

	return $css;
}

/**
 * Compresses string containing CSS
 * @param string $css CSS string
 * @return string compressed CSS
 */
function compressCSS($css) {
	$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
	$css = str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$css);
	$css = str_replace('{ ', '{', $css);
	$css = str_replace(' }', '}', $css);
	$css = str_replace('; ', ';', $css);
	$css = str_replace(', ', ',', $css);
	$css = str_replace(' {', '{', $css);
	$css = str_replace('} ', '}', $css);
	$css = str_replace(': ', ':', $css);
	$css = str_replace(' ,', ',', $css);
	$css = str_replace(' ;', ';', $css);
	$css = str_replace(';}', '}', $css);
	return $css;
}

/**
 * Checks if media is used by this addon
 * @param rex_extension_point $ep Redaxo extension point
 * @return string[] Warning message as array
 */
function rex_d2u_helper_media_is_in_use(rex_extension_point $ep) {
	$warning = $ep->getSubject();
	$params = $ep->getParams();
	$filename = addslashes($params['filename']);

	// Settings
	$addon = rex_addon::get("d2u_helper");
	if(($addon->hasConfig("template_header_pic") && $addon->getConfig("template_header_pic") == $filename) ||
		($addon->hasConfig("template_logo") && $addon->getConfig("template_logo") == $filename)) {
		$message = '<a href="javascript:openPage(\'index.php?page=d2u_helper/settings\')">'.
			 rex_i18n::msg('d2u_helper_meta_title') ." ". rex_i18n::msg('d2u_helper_meta_settings') . '</a>';
		if(!in_array($message, $warning)) {
			$warning[] = $message;
		}
	}

	return $warning;
}

/**
 * Sends CSS file and exits PHP Script. The CSS file consists of module and menu
 * css.
 */
function sendD2UHelperCSS() {
		header('Content-type: text/css');
		$d2u_helper = rex_addon::get('d2u_helper');
		$css = "";
		// Module CSS
		if($d2u_helper->hasConfig("include_module") && $d2u_helper->getConfig("include_module") == "true") {
			$module_manager = new D2UModuleManager(D2UModuleManager::getD2UHelperModules());
			$css .= $module_manager->getAutoCSS();
		}
		// Menu CSS
		if($d2u_helper->hasConfig("include_menu") && $d2u_helper->getConfig("include_menu") == "true") {
			$css .= d2u_mobile_navi::getAutoCSS();
		}

		// Apply template settings and compress
		print compressCSS(applyColorToCSS($css));
		exit;	
}

/**
 * Sends JS file and exits PHP Script. The JS file consists of module js.
 * @param string $position JS position ("head" oder "body") 
 */
function sendD2UHelperJS($position = "head") {
		header('Content-type: text/javascript');
		$d2u_helper = rex_addon::get('d2u_helper');
		$js = "";
		if($position == "body") {
			// Module JS
			if($d2u_helper->hasConfig("include_module") && $d2u_helper->getConfig("include_module") == "true") {
				$module_manager = new D2UModuleManager(D2UModuleManager::getD2UHelperModules());
				$js .= $module_manager->getAutoJS();
			}
		}
		else if($position == "head") {
			// Menu JS
			if($d2u_helper->hasConfig("include_menu") && $d2u_helper->getConfig("include_menu") == "true") {
				$js .= d2u_mobile_navi::getAutoJS();
			}
		}
		print $js;
		exit;	
}

/**
 * Sends CSS file and exits PHP Script. The CSS file consists of template and
 * - if in settings checked - also module css.
 * @param string $d2u_template_id
 */
function sendD2UHelperTemplateCSS($d2u_template_id = "") {
		header('Content-type: text/css');
		$css = "";
		// Template CSS
		if($d2u_template_id != "") {
			$template_manager = new D2UTemplateManager(D2UTemplateManager::getD2UHelperTemplates());
			$current_template = $template_manager->getTemplate($d2u_template_id);
			$css .= $current_template->getCSS();
		}
		
		// Apply template settings
		$css = applyColorToCSS($css);
		
		// Compress
		print compressCSS($css);
		exit;	
}