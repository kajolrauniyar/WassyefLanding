<div class="bottom-area">
    <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
    <?php 
         wp_nav_menu([

             //'menu'            => 'header-menu',

             'theme_location'  => 'header-menu',

             'container' => '',

             'menu_id'         => false,

             'items_wrap'      => '<ul class="main-menu visible-on-click">%3$s</ul>',

             'menu_class'      => 'main-menu visible-on-click',

             'depth'           => 2,
             
                 'fallback_cb'     => 'bs4navwalker::fallback',

                 'walker'          => new bs4navwalker()

        ]);
    ?>
    </div>
</div><!-- conatiner -->