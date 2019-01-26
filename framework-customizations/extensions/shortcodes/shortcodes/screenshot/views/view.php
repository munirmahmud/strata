<?php if (!defined('FW')) die('Forbidden'); ?>


<div id="app-gallery-carousel" class="owl-carousel owl-theme text-center app-gallery">
    <?php foreach ($atts['screenshots'] as $screenshot): ?>
        <div class="grid">
            <figure class="effect-oscar item">
                <img class="img-responsive" src="<?php echo esc_url($screenshot['image']['url']); ?>" alt="<?php echo esc_html($screenshot['title']); ?>">
                <figcaption>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="<?php echo esc_url($screenshot['image']['url']); ?>"><i class="fa fa-search"></i></a>
                </figcaption>
            </figure>
        </div>
    <?php endforeach; ?>
</div><!-- App gallery end -->