<?php 
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<!--
<div class="row">
    <?php print render($page['top_actions_bar']); ?>
</div>

<div class="row">
    <?php print render($page['top_nav_bar']); ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php print $breadcrumb; ?>
            <?php print $messages; ?>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-12 dee-image-slide">
            <?php
            if ($page['image-slides']):
                print render($page['image-slides']);
            endif;
            ?>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class=" col-md-9 dee-page-content ">
            <?php print render($page['content']); ?>

        </div>
        <div id="dee-sidebar" class="col-md-3 dee-sidebar">
            <div class="row">
                <div id="sidebar-first" class="col-md-12 dee-sidebar-first">
                    <?php if ($page['sidebar_first']): ?>
                        <?php print render($page['sidebar_first']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div id="sidebar-second" class="col-md-12 dee-sidebar-second">
                    <?php if ($page['sidebar_second']): ?>
                        <?php print render($page['sidebar_second']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row footer dee-footer">
    <div class="col-md-12">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <?php print $feed_icons ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php print render($page['footer']); ?>
                </div>
            </div>
        </div>
    </div>
</div>
--!>
<html>
	<head>
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="custom/custom.css">

		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</head>
	<body>
	
	
		<div class="navbar navbar-default " role="banner">
				<div class="container">
					<div class="navbar-header">
						<button  type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand text-centered" href="#"><b>Nokia Andriod</b></a>
					</div>
					<div class="navbar-collapse collapse " id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav" >
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">News</a></li>
							<!--li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							  </ul>
							</li>-->
							<li><a href="#" >Videos</a></li>
							<li><a href="#">Tutorials</a></li>
							<li><a href="#">Apps</a></li>
							<li><a href="#">Devices</a></li>
						</ul>
					</div>
				</div>
			</div>

	
	</body>
</html>



