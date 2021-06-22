<section class="upcoming_events_section">
    <div class="upcoming_events_container">
        <div class="upcoming_events_wrapper">
            <h2>Upcoming <span class="red">Events</span></h2>
            <?php
            $args = array(
                'post_type' => 'events',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'meta_key'  => 'event_date',
                'orderby'   => 'meta_value_num',
                'order' => 'ASC',

            );

            // 
            // 
            // Need to validate that the date is beyond today
            // Also need to make what displays different on whether it is a charity event or a match
            // 
            // 
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $eventDescription = get_field('event_description');
                if (get_field('opponent_logo')) {
                    $opponentLogo =  get_field('opponent_logo')['url'];
                } else {
                    $opponentLogo = get_template_directory_uri() . '/images/opponent_logo_default.png';
                }
            ?>
                <?php if (get_field('event_date') <= time()) : ?>
                    <?php if (get_field('event_type') == "Team vs Team") : ?>
                        <p>team vs team</p>
                    <?php elseif (get_field('event_type') == "General Stream") :
                    ?>
                        <p>general stream</p>
                <?php endif;
                endif; ?>

            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>