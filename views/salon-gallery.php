<div class="uk-slidenav-position" data-uk-slider="{center:'true',autoplay:'true'}">
    <div class="uk-slider-container">
        <div class="fade-left"></div>
        <div class="fade-right"></div>
        <ul class="uk-slider uk-slider-fullscreen uk-grid uk-grid-medium uk-grid-width-large-1-2">
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();
					$thumb_id        = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'full', true );
					$resized_src     = beans_edit_image( $thumb_url_array[0], array(
						'resize' => array( 500, 750, true )
					) );
					?>
                    <li style="animation-duration: 100ms; height: 300px;">
                        <div class="slider-image">
                            <picture><img src="<?php echo $resized_src; ?>"
                                          alt="Energy Hair Co. Noosa"></picture>
                            </a>
                        </div>
                    </li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </ul>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
    </div>
</div>
