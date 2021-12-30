<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <a class="skip-nav" href="#navigation">Skip to navigation</a>
    <!-- begin header MODULE -->
    <header class="header__container">
        <a class="header__logo-anchor" href="/">
            <p>&lt&#9833;&#9833;&#9833;&#9833;/&gt</p>
        </a>
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'Main Navigation'
                )
            ) 
        ?>
    </header>
    <hr>
    <!-- end header MODULE -->
    <!-- Begin main content MODULE - closes at footer.php -->
    <div id="main" tabindex="-1" class="Main-Content">