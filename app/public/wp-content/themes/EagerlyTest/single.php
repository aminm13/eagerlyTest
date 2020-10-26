<?php 
get_header();


if (have_posts()) {
    while(have_posts()){
        ?>
        <a href="<?php echo get_permalink(); ?>" class="uitgelicht-item">
        <div class="image init">
            <img src="image1.jpg" alt=""/>
            <div class="hover-overlay"></div>
        </div>
        <h2><?php the_post();?></h2>
        <p><?php get_template_part('templates-parts/content','event');?></p>
        <div class="info">
            <button data-href="uitgelicht-detail.php" class="btn btn--white right">bekijk meer</button>
            <div class="date-time">
                <span class="date"><i class="svg-icon" data-icon="icon-date" data-fill="#ffffff"></i>Dinsdag 22 nov tm <br/>vrijdag 25 nov</span>
            </div>
        </div>
    </a>
        <?php
    }
}

 ?>
    