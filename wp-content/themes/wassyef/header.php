<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale= 1.0">
    <title><?php  the_field('site_title');?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700,900" rel="stylesheet">
<?php wp_head();?>
</head>
<body>
    <div class="wrapper">
        <div class="register-btn">
            <a href="<?php the_field('site_register_link');?>"><?php the_field('site_register');?></a>
        </div>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-md">
                            <a class="navbar-brand" href="#">

                                <?php                                       
                                $image = get_field('logo');
                                if( !empty($image) ): ?>
                                
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                              </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wassyefNav">
                                <span class="fa fa-bars"></span>
                            </button>
                         <?php if( have_rows('header_nav') ): ?>
                            <div class="collapse navbar-collapse" id="wassyefNav">
                                <div class="wassyefNav__contact">
                                    <a href="<?php the_field('phone_link');?>"> <?php the_field('phone');?><span class="icon icon-phone"></span></a>
                                </div>
                            <ul class="navbar-nav">
                                <?php while( have_rows('header_nav') ): the_row();
                                        // vars
                                $title = get_sub_field('nav_title');
                                $link = get_sub_field('nav_link');
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                          
                        </div> 
                             <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>