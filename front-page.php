<?php get_header()?>

<section class="latest ">
        <div class="container">
            <div class="latest__grid">
                <div class="latest__main">
                <?php        
                    $latestMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "banner-main",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($latestMain->have_posts()) : while($latestMain->have_posts()) : $latestMain->the_post()?>
                    <article class="card card--md latest--md">
                    <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php the_date()?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author('first_name')?>
                            </li>
                        </ul>
                        <h2><?php the_title()?></h2>
                        <p><?php the_content()?></p>
                    </article>
                </div>
                <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>


                <div class="latest__side">
                <?php        
                    $latestSide = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "banner-side",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($latestSide->have_posts()) : while($latestSide->have_posts()) : $latestSide->the_post()?>
                    <article class="card card--sm latest--sm">
                    <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php the_date()?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                                By: <?php echo get_the_author('first_name')?>
                            </li>
                        </ul>
                        <h4><?php the_title()?></h4>
                        <p><?php the_content()?></p>
                    </article>
                    
                    <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>

                </div>
            </div>
        </div>
    </section>


    <section class="trending py--10">
        <div class="container">
            <h2 class="block__header align--left">Hot Trending Arcticle</h2>
            <?php        
                    $trending = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "trending",
                            'compare' => "="
                            )
                          ) 
                         ))
                        ?>
                <?php if($trending->have_posts()) : while($trending->have_posts()) : $trending->the_post()?>
            <div class="trending__card card card--full">
            
                <ul class="card__info--full">
                    <li><small><?php the_title()?></small></li>
                    <li><span><?php the_date()?></span>  <span>by: <?php echo get_the_author('first_name')?></span></li>
                </ul>
                <h3><?php the_content() ?></h3>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
            </div>
            <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>
        </div>
        
    </section>
    <section class="story py--5">
        <div class="container">
            <h2 class="block__header align--center">The Latest Stories</h2>

            <div class="story__grid">
            <?php        
                    $storyMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "story",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($storyMain->have_posts()) : while($storyMain->have_posts()) : $storyMain->the_post()?>
                <article class="card card--xs story-a">
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date">Feb 11</span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: Awesome Me
                        </li>
                    </ul>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                
                </article>
                 
                <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>



                <article class="card card--xs story-b">
                <?php        
                    $storyMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "story",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($storyMain->have_posts()) : while($storyMain->have_posts()) : $storyMain->the_post()?>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date">Feb 11</span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: Awesome Me
                        </li>
                    </ul>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                
                    </article>
                     
                    <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>




                <article class="card card--xs story-c">
                <?php        
                    $storyMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "story",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($storyMain->have_posts()) : while($storyMain->have_posts()) : $storyMain->the_post()?>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date">Feb 11</span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: Awesome Me
                        </li>
                    </ul>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                
                </article>
                 
                <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>




                <article class="card card--xs story-d">
                <?php        
                    $storyMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "story",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($storyMain->have_posts()) : while($storyMain->have_posts()) : $storyMain->the_post()?>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date">Feb 11</span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: Awesome Me
                        </li>
                    </ul>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                
                </article>
                 
                <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>



                <article class="card card--xs story-e">
                <?php        
                    $storyMain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                         array(
                            'key' => "grouping",
                            'value' => "story",
                            'compare' => "="
                            )
                          ) 
                    ))
                ?>
                <?php if($storyMain->have_posts()) : while($storyMain->have_posts()) : $storyMain->the_post()?>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }               
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date">Feb 11</span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: Awesome Me
                        </li>
                    </ul>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                    <a href="<?php the_permalink()?>">Read More</a>
                </article>

             
                <?php 
                endwhile;
            else:
                echo "no post xxx";
            endif;
            wp_reset_postdata();

              ?>



            </div>
        </div>
    </section>



    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <h2>Subscribe to get more</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempore magni voluptate quam illum id ad temporibus itaque fuga necessitatibus</p>

                <ul class="d--flex justify--center">
                    <li class="mx--1"><a href="#" class="btn btn--light">Subscribe Now</a></li>
                    <li class="mx--1"><a href="#" class="btn btn--outline">Leader More</a></li>
                </ul>
            </div>
        </div>
    </section>

    

<?php get_footer()?>