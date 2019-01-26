<?php
if (!defined('FW'))
    die('Forbidden');
?>

<div class="twitter-main-area">
    <div class="text-center twitter-header">
        <i class="fa fa-twitter"></i>
    </div>

    <div class="twt-single text-center">
        <?php if (!empty($atts['twitter_user_id'])): ?>
            <div id="twitter-feeds" data-widget-id="<?php echo esc_attr($atts['twitter_user_id']); ?>" class="twitter-feeds"></div>
        <?php endif; ?>
    </div>
</div>