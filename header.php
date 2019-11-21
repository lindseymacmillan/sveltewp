<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head();

		$type = '';
		$title = wp_title(null, false, null);
		$content = '';

		if (is_archive()) {
			$type = 'archive';
			$content = '<p>This is an archive.</p>';
		}

		if (is_singular() || is_page()) {
			$post = get_post(get_the_ID());
			$type = 'singular';
			$content = '<p>This is initial post content.</p>';
		}

		?>

		<script type="text/javascript" id="content-data">
			content_data = {
				type: '<?php echo $type; ?>',
				title: '<?php echo $title; ?>',
				content: '<?php echo $content ?>',
			}
		</script>
	
	</head>
	<body <?php body_class(); ?>>

		<div id="app">