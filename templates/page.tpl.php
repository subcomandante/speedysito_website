<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <div id="header_top">
  <div class="region_header_top_inner ss_row_wrapper clearfix">
    <?php print render($page['header_top']); ?>
  </div>
  </div>

  <header class="header" id="header" role="banner">
  <div class="region_header_inner ss_row_wrapper clearfix">
    <?php if ($logo || $site_name): ?>
      <div class="header__logo-and-name" id="logo-and-name">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </div>
  </header>

  <div id="preface">
  <div class="region_preface_inner ss_row_wrapper clearfix">
    <?php print render($page['preface']); ?>
  </div>
  </div>

  <div id="main_wrapper">
  <div id="main">
  <div class="region_main_inner ss_row_wrapper clearfix">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>
  </div>

  <div id="main_bottom">
  <div class="main_bottom_inner ss_row_wrapper clearfix">
    <?php print render($page['main_bottom']); ?>
  </div>
  </div>

  </div>

  <div id="footer_top">
  <div class="footer_top_inner ss_row_wrapper clearfix">
    <?php print render($page['footer_top']); ?>
  </div>
  </div>



  <div id="footer">
  <div class="ss_row_wrapper clearfix">
  <?php print render($page['footer']); ?>
  </div>
  <div>

</div>

<?php print render($page['bottom']); ?>
