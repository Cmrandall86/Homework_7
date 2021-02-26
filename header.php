<!DOCTYPE html>
<!– BEGIN header.php -->
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="wrapper">
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
    </header>
<!– END header.php -->