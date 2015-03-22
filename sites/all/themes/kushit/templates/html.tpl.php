<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9"<?php print $html_attributes; ?>><![endif]-->
<!--[if gt IE 8]><!--><html<?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript" src="//use.typekit.net/wqw8coz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php print $polyfills; ?>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="skip-link" class="nocontent">
    <a href="<?php print $skip_link_target; ?>" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
