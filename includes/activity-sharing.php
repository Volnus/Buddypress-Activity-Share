<?php

function buddy_social_button_activity_filter() {

    $activity_type = bp_get_activity_type();
    $activity_link = bp_get_activity_thread_permalink();
    $activity_title = bp_get_activity_feed_item_title();
    $plugin_path = plugins_url();

    $buddy_social_facebook = '<a class="new-window social  fa-facebook-square" href="https://www.facebook.com/sharer/sharer.php?t='.$activity_title.'&u=' . $activity_link . '" rel="facebox"></a>';

    $buddy_social_twitter = '<a class="new-window social  fa-twitter-square" href="http://twitter.com/share?text='.$activity_title.'&url=' . $activity_link . '" rel="twitter"></a>';

    $buddy_social_google = '<a class="new-window social fa-google-plus-square" href="https://plus.google.com/share?url=' . $activity_link . '" rel="google-plus"></a>';
  
    $buddy_social_tumblr = '<a class="new-window social fa-tumblr-square" href="http://www.tumblr.com/share/link?url=' . $activity_link . '" rel="tumblr"></a>';
  
    $buddy_social_email = '<a class="general fa-envelope" href="mailto:?body='.$activity_title .' ' . $activity_link . '" rel="nofollow"></a>';
 	
    $buddy_social_addthis = '<a class="new-window social fa-plus-square" href="https://www.addthis.com/bookmark.php?source=bx32nj-1.0&v=300&url=' . $activity_link . '" rel="nofollow"></a>';

    ?><span class="bp-social-button">
<a class="button item-button bp-secondary-action buddypress-social-button" rel="nofollow">Share</a></span>
    
    <div class="social-buttons <?php $activity_type ?>" style="display: none;">
            <?php echo "$buddy_social_facebook"; ?>
            <?php echo "$buddy_social_twitter"; ?>
            <?php echo "$buddy_social_google"; ?>
            <?php echo "$buddy_social_tumblr"; ?>
            <?php echo "$buddy_social_email"; ?>
            <?php echo "$buddy_social_addthis"; ?>
    </div>

    <?php
}
add_action('bp_activity_entry_meta', 'buddy_social_button_activity_filter', 999);

?>
