<?php
get_header();
?>
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
<?php
if( have_posts() ): while( have_posts() ): the_post();
?>

<div id="detail" class="center js-content uitgelicht-detail" style="background:white;">
    <div class="uitgelicht-detail " >
        <div class="hero-image">
        <?php the_post_thumbnail( ) ?>
        </div>
        <aside class="detail-content-aside js-detail-content-aside right">
				<a class="btn btn--tickets"> <?php   echo get_post_meta($post->ID, 'price',true);?></a>
				<div class="detail-info">
				<ul >
					<li ><i class="fas fa-clock"></i><?php echo get_post_meta($post->ID, 'start_date_time',true);?></li>
					<li><i class="fas fa-map-marker-minus"></i><?php echo get_post_meta($post->ID, 'location',true);?></li>
                    <li><i class="fas fa-wine-glass-alt"></i> <?php if(get_post_meta($post->ID, 'includes_drink',true) !== 'false'){ ?> Included Drinks<?php }?></p></li>
                    <li> <a class="btn" href="<?php echo get_post_meta($post->ID, 'ticket_url',true);?>"> Buy Tickets </a></li>
                    <li><a class="btn" href="<?php echo get_post_meta($post->ID, 'program_url',true);?>"> Program Page </a></li>
	
                </ul>
            </div>
        </aside>
            </div>
            <div class="content">
            <div class="the_content" >

				<p class="intro">The official opening of the <?php the_title();?>.</p>
                
                <p class="intro"><?php echo get_post_meta($post->ID, 'subtitle',true);?></p>

                
				<h3>When?</h3>
				<p>On <?php echo get_post_meta($post->ID, 'start_date_time',true);?>, the Polderparade will be held, the opening of the Haarlemmermeer cultural season. Polderparade takes place in <?php echo get_post_meta($post->ID, 'location',true);?>, which serves as a podium for the Polder.</p> 
	
				<h3>What is it?</h3>
				<p> <?php echo get_post_meta($post->ID, 'short_description',true);?>Residents, artists and cultural institutions that have an offer in any way for the new season will present it on this day.</p>
	
				<h3>What is there to do?</h3>
				<p><?php the_excerpt(); ?></p>
	
				<div class="video">
                <iframe
                width="560" 
                height="315" 
                src="<?php echo get_post_meta($post->ID, 'video',true);?>" 
                frameborder="0" 
                allow="autoplay; 
                encrypted-media" 
                allowfullscreen>
                </iframe>
                </div>
                <div>
                <h3>More In Depth </h3>
                <p> <?php the_content();?> </p>
                </div>
            </div>
</div>
    </p>
    <p>
    <?php

    the_category(); // to be fixed
    ?>
    </p>
    </p>
    <?php
    echo get_post_meta($post->ID, 'intermission',true);
    ?>
    </p>
</div>

<?php endwhile; else: endif;?>
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
</div>

<?php get_footer(); ?>