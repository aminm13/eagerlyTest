<a href="<?php echo get_permalink(); ?>" class="uitgelicht-item">
    <div class="image init">
    <div class="hover-overlay"> <?php the_post_thumbnail( ) ?> </div>
    </div>
    <h2><?php the_post();?></h2>
    <h3><?php the_title(); ?> </h3>
    <p><?php echo get_post_meta($post->ID, 'short_description',true);?></p>
    <div class="info">
        <button data-href="uitgelicht-detail.php" class="btn btn--white right">bekijk meer</button>
        <div class="date-time">
            <span class="date"><i class="svg-icon" data-icon="icon-date" data-fill="#ffffff"></i><?php echo get_post_meta($post->ID, 'start_date_time',true);?></span>
        </div>
    </div>
</a>