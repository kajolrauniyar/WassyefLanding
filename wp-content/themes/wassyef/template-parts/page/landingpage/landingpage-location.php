<!-- CONVENIENT LOCATION-->
        <section class="section__location" id="location">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section__title">
                            <h2><?php the_field('convenient_location_title');?> <span><?php the_field('convenient_location_title_part');?></span></h2>
                        </div>
                        <div class="desc">
                         <?php the_field('convenient_location_content');?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="dist__info">
                             <?php if( have_rows('convenient_location_repeater') ): ?>
                            <div class="row">
                               
                                <?php while( have_rows('convenient_location_repeater') ): the_row();
                                    // vars
                                $time = get_sub_field('c_l_r_time');
                                $duration = get_sub_field('c_l_r_t_duration');
                                $content= get_sub_field('convenient_location_repeater_content');
                                ?>
                                <div class="col-sm-3">

                                    <div class="dist__infoHolder time--gray">
                                        <div class="dist__time">
                                            <p><?php echo $time; ?></p>
                                            <p><span class="min--txt"><?php echo $duration; ?></span></p>
                                        </div>
                                        <div class="dist__name">
                                            <p><?php echo $content; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                              <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>