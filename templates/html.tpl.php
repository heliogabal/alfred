<!doctype html>

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <!--<![endif]-->
<?php print $mothership_poorthemers_helper; ?>
<head>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $appletouchicon; ?>
<?php if(theme_get_setting('mothership_mobile')){  ?>
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true"><?php } ?>
<?php if(theme_get_setting('mothership_viewport')){  ?><meta name="viewport" content="width=device-width, initial-scale=1"><?php } ?>
<?php if(theme_get_setting('mothership_viewport_maximumscale')){  ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"><?php } ?>
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/parrot/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/sites/all/themes/parrot/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/parrot/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/parrot/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/parrot/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/parrot/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/sites/all/themes/parrot/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/sites/all/themes/parrot/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/sites/all/themes/parrot/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/sites/all/themes/parrot/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/sites/all/themes/parrot/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/sites/all/themes/parrot/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/sites/all/themes/parrot/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php print $styles; ?>
<?php if(theme_get_setting('mothership_respondjs')) { ?>
<!--[if lt IE 9]>
  <script src="<?php print $mothership_path; ?>/js/respond.min.js"></script>
<![endif]-->
<?php } ?>
<!--[if lt IE 9]>
  <script src="<?php print $mothership_path; ?>/js/html5.js"></script>
<![endif]-->
<?php print $selectivizr; ?>
<?php
  if(!theme_get_setting('mothership_script_place_footer')) {
    print $scripts;
  }
?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php
  if(theme_get_setting('mothership_script_place_footer')) {
    print $scripts;
  }
?>
<?php print $page_bottom; //stuff from modules always render last ?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//inglist.de/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 40]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//inglist.de/piwik/piwik.php?idsite=40" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>

