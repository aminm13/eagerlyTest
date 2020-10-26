<?php get_header(); ?>

    <div id="page">

        <div id="bg-dots" class="bg-dots js-bg-dots">
            <span id="pos_1" class="pos js-pos js-pos1 variant1"></span>
            <span id="pos_2" class="pos js-pos js-pos2 variant3"></span>
            <span id="pos_3" class="pos js-pos js-pos3 variant3"></span>
            <span id="pos_4" class="pos js-pos js-pos4 variant2"></span>
            <span id="pos_5" class="pos js-pos js-pos5 variant4"></span>
            <span id="pos_6" class="pos js-pos js-pos6 variant1"></span>
            <span id="pos_7" class="pos js-pos js-pos7 variant2"></span>
            <span id="pos_8" class="pos js-pos js-pos8 variant4"></span>
            <span id="pos_9" class="pos js-pos js-pos9 variant3"></span>
            <span id="pos_10" class="pos js-pos js-pos10 variant4"></span>
        </div>


        <div id="content" class="center js-content uitgelicht-overzicht">

    <h1>Binnenkort <br/>in Het Cultuurgebouw</h1>

    <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>
    <a href="<?php echo get_permalink(); ?>" class="uitgelicht-item">
    <div class="image init">
    <?php the_post_thumbnail( ) ?>
    <div class="hover-overlay"> </div>
    </div>
    <h3><?php the_title(); ?> </h3>
    <p><?php echo get_post_meta($post->ID, 'short_description',true);?></p>
    <div class="info">
        <button data-href="uitgelicht-detail.php" class="btn btn--white right">bekijk meer</button>
        <div class="date-time">
            <span class="date"><i class="svg-icon" data-icon="icon-date" data-fill="#ffffff"></i><?php echo get_post_meta($post->ID, 'start_date_time',true);?></span>
        </div>
    </div>
    </a>
    <?php
    endwhile; 
endif; 
?>
    

    <?php
    the_posts_pagination();
    ?>

<div class="center">
    <a id="go-to-top" href="#">terug naar boven
        <span class="icon">
                <svg x="0px" y="0px" width="70%" viewBox="102 7.699999999999999 12 8.7">
                    <g id="icon-arrow" transform="rotate(180 108 12)">
	                    <polygon id="arrow" points="113,10.3 111.3,8.7 108,12 104.7,8.7 103,10.3 108,15.3  " fill="#ef8f8f"></polygon>
                    </g>
                </svg>
            </span>
    </a>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>


