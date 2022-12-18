<?php $options = get_option('pochi_settings');?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-12">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo $options['header-logo']['url'] ?>" alt="<?php echo $options['header-logo']['alt'] ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 d-none d-lg-block">
                    <ul class="basic-menu">
                        <li class="active">
                            <a href="<?php echo $options['header-career-url'] ?>"><?php echo $options['header-career'] ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-12 d-none d-lg-block">
                    <ul class="basic-menu">
                        <li>
                            <a href="tel:<?php echo $options['header-phone'] ?>"><?php echo $options['header-phone'] ?></a>
                            <span class="line"></span>
                            <a href="mail-to:<?php echo $options['header-mail'] ?>"><?php echo $options['header-mail'] ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="lg-menu">
                        <button id="menu-toggle-lg" class="navbar-toggler-lg">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->
    <!-- lg menu -->
    <section id="sidebar-wrapper-lg">
        <div class="container p-60">
            <div class="row j-center">

                <div class="col-xl-4 col-lg-12 ">
                    <div class="mega-menu-img">
                        <img class="img-fluid" src="<?php echo $options['header-menu-img']['url'] ?>" alt="<?php echo $options['header-menu-img']['alt'] ?>">
                        <p class="menu-mail"><a href="mail-to:<?php echo $options['header-mail'] ?>"><?php echo $options['header-mail'] ?> <i class="fas fa-arrow-right "></i></a>
                        </p>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-12 j-center">
				<?php
						if (has_nav_menu('main-menu')) {
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu' => '',
									'container' => 'div',
									'container_class' => '',
									'container_id' => '',
									'menu_class' => '',
									'menu_id' => '',
									'echo' => true,
									'fallback_cb' => 'main-menu',
									'before' => '',
									'after' => '',
									'link_before' => '',
									'link_after' => '',
									'items_wrap' => '<ul class="lg-main-menu">%3$s</ul>',
									'depth' => 0,
									'walker' => '',
								)
							);
						}
						?>
                

                </div>
            </div>
        </div>
    </section>
    <!-- lg menu -->