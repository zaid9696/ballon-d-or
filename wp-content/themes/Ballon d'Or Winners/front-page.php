<?php 

    get_header( );

?>

<!-- Header -->
<header class="header">
    <div class="header__logo">
        <img src="<?php echo get_theme_file_uri('/img/ballon-dor.svg'); ?>" alt="Logo">
    </div>
    <h1 class="header__title">All the winners of <span>Ballon d'Or</span> since 1956</h1>
    <form class="header__form"  autocomplate="off">
        <img src="<?php echo get_theme_file_uri('/img/Rolling.svg');?>" class="loading">
        <input type="search"  autocomplete="off" id="header__input" placeholder="Just search the year or the name, e.g. 1996 or Messi" >
        <img src="<?php echo get_theme_file_uri('/img/loupe.svg');?>" class="searchIcon">
        
    </form>
</header>

<!-- First -->
<div class="first">
    
</div>
<!-- Second -->
<div class="second">
       
</div>






<!-- Video -->
<div class="video__background">
    <div class="video__overlay"></div>
    <video autoplay loop muted class="video__src" >
        <source src="<?php echo get_theme_file_uri('/img/video-1.mp4') ?>" type="video/mp4"></source>
    </video>
</div>
<?php 

    get_footer( );

?>