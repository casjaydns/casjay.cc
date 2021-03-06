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
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page_title; ?></title>
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/default/js/',
    'style_dir' => 'themes/' . $theme . '/css/',
    'cache_dir' => 'static/asset/',
    'base_uri' => base_url(),
    'combine' => true,
    'dev' => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('reset.css');
$this->carabiner->css('fonts.css');
$this->carabiner->css('main.css');
$this->carabiner->css('embed.css');

$this->carabiner->display('css');

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>
	<body>

<div class="paste">
<?php if ($this->uri->segment(4) != 'diff') {?>
    <p><a href="<?php echo site_url('view/' . $pid); ?>" target="_blank">This paste</a> brought to you by <a href="<?php echo base_url(); ?>" target="_blank"><?php echo $this->config->item('site_name'); ?></a>. <a class="right" href="<?php echo site_url('view/raw/' . $pid); ?>" target="_blank">View Raw</a></p>
<?php } else {?>
    <p><a href="<?php echo site_url('view/' . $pid . '/diff'); ?>" target="_blank">This diff</a> of <a href="<?php echo site_url('view/' . $pid); ?>" target="_blank">that paste</a> brought to you by <a href="<?php echo base_url(); ?>" target="_blank"><?php echo $this->config->item('site_name'); ?></a>. <a class="right" href="<?php echo site_url('view/raw/' . $pid); ?>" target="_blank">View Raw</a></p>
<?php }?>
	<div class="text_formatted">
		<div class="container">
			<?php echo $paste; ?>
		</div>
	</div>
</div>

<?php

?>
<script>
</script>
	</body>
</html>
