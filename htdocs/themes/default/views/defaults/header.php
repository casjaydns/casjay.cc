<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$page_title = '';
if (isset($title)) {
	$page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
$theme = $this->config->item('theme');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

	<?php
	//Carabiner
	$this->carabiner->config(array(
		'script_dir' => 'themes/default/js/',
		'style_dir' => 'themes/' . $theme . '/css/',
		'cache_dir' => 'static/asset/',
		'base_uri' => $this->config->item('base_url'),
		'combine' => true,
		'dev' => !$this->config->item('combine_assets'),
	));
	// CSS
	$this->carabiner->css('reset.css');
	$this->carabiner->css('jquery-ui.min.css');
	$this->carabiner->css('fonts.css');
	$this->carabiner->css('main.css');
	$this->carabiner->css('print.css', 'print');
	$this->carabiner->css('codemirror.css');
	$this->carabiner->css('diff.css');
	$this->carabiner->display('css');
	$searchparams = ($this->input->get('search') ? '?search=' . $this->input->get('search') : '');
	$searchparams = str_replace('"', '&quot;', $searchparams);
	?>
	<script type="text/javascript">
		//<![CDATA[
		var base_url = '<?php echo base_url(); ?>';
		//]]>
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo base_url() . 'favicon.ico'; ?>" />

	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/darkly/bootstrap.css">
	<title><?php echo $page_title; ?></title>
</head>

<body>
	<div id="container">
		<div class="container">
			<div class="header">
				<h1><a href="<?php echo base_url(); ?>" class="title"><?php echo $this->config->item('site_name'); ?></a></h1>
				<ul class="tabs">
					<?php $l = $this->uri->segment(1) ?>
					<li><a <?php if ($l == "") {
						echo 'class="active"';
					} ?> href="<?php echo base_url(); ?>"
							title="<?php echo lang('menu_create_title'); ?>"><?php echo lang('menu_create'); ?></a></li>
					<?php if (!$this->config->item('private_only')) { ?>
						<li><a <?php if ($l == "lists") {
							echo 'class="active"';
						} ?>
								href="<?php echo site_url('lists') . $searchparams; ?>"
								title="<?php echo lang('menu_recent_title'); ?>"><?php echo lang('menu_recent'); ?></a></li>
						<li><a <?php if ($l == "trends") {
							echo 'class="active"';
						} ?>
								href="<?php echo site_url('trends') . $searchparams; ?>"
								title="<?php echo lang('menu_trending_title'); ?>"><?php echo lang('menu_trending'); ?></a></li>
					<?php } ?>
					<?php if (!$this->config->item('disable_api')) { ?>
						<li><a <?php if ($l == "api") {
							echo 'class="active"';
						} ?> href="<?php echo site_url('api'); ?>"
								title="<?php echo lang('menu_api'); ?>"><?php echo lang('menu_api'); ?></a></li>
					<?php } ?>
					<li><a <?php if ($l == "about") {
						echo 'class="active"';
					} ?> href="<?php echo site_url('about'); ?>"
							title="<?php echo lang('menu_about'); ?>"><?php echo lang('menu_about'); ?></a></li>
					<?php
					if ($this->config->item('require_auth')) {
						if ($this->auth_ldap->is_authenticated()) {
							echo "<li><a href=" . site_url('auth/logout') . ' title="' . lang('menu_logout') . '">' . lang('menu_logout') . '</a></li>';
						}
					}
					?>
				</ul>
			</div>

			<div class="content">
				<div class="container">
					<?php if (isset($status_message)) { ?>
						<div class="message success change">
							<div class="container">
								<?php echo $status_message; ?>
							</div>
						</div>
					<?php } ?>
