<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/images/ponos.png" ?>" type="image/x-icon">
</head>
<?php wp_head(); ?>
<body>

    <header class="main-header">
        <div class="uk-container uk-container-large">
            <div class="site-navigation">
                <div class="logo">
                    <a href="/" class="nav-logo">
                        <!-- <img src="</?php echo get_template_directory_uri() . "/images/ponos.png" ?>" alt="amakwa logo"> -->
                         <h1>Po<span>nos</span></h1>
                    </a>
                </div>

                <div class="nav-wrapper">
                    <?php
                        $args = array(
                            'theme_location' => 'main-menu',
                            'container'      => 'nav',
                            'container_class'=> 'main-menu'
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>

                <div class="burger">
                    <span class="burger-bar"></span>
                </div>

                
            </div>
        </div>
    </header>

    <main class="main-content">