<!DOCTYPE html>

<!--[if IE 8]>
  <html class="no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->

<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?> class="no-js" itemscope="" itemtype="http://schema.org/WebPage">
<!--<![endif]-->

<head>
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Fallback -->
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
    <script type="text/javascript" src="http://assets.figmints.com/ieBad/ieBad.js"></script>
  <![endif]-->

  <!-- Scripts -->
  <script type="text/javascript" src="//use.typekit.net/jfo8dtv.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
