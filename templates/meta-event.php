<?php
/**
 * Meta Data - Event - Partial.
 *
 * @package phx-university
 * @since 1.0.0
 */

// Dates.
$start_date = get_field( 'event_start_date' );
$start_time = get_field( 'event_start_time' );
$end_date   = get_field( 'event_end_date' );
$end_time   = get_field( 'event_end_time' );

$start_date_formatted = date( 'F j', strtotime( $start_date ) );

// Presenter.
$presenter      = get_field( 'presenters_name' );
$presenter_link = get_field( 'presenters_link' );

// Taxonomies.
$categories = get_the_terms( get_the_ID(), 'event-category' );
$locations  = get_the_terms( get_the_ID(), 'event-location' );
?>
<div class="event-meta meta">
	<span class="event-date">
		<i class="fa fa-calendar left" aria-hidden="true"></i>
		<span class="event-date-text"><?php echo esc_attr( $start_date_formatted ); ?></span>
	</span>

	<span class="event-time">
		<i class="fa fa-clock-o left" aria-hidden="true"></i>
		<span class="event-time-text"><?php echo esc_attr( $start_time ); ?></span>
	</span>

	<span class="event-presenter">
		<i class="fa fa-user-circle left" aria-hidden="true"></i>
		<span class="event-presenter-text"><?php echo esc_attr( $presenter ); ?></span>
	</span>

	<span class="event-location">
		<i class="fa fa-map-marker left" aria-hidden="true"></i>
		<?php echo get_the_term_list( get_the_ID(), 'event-location', 'Location: ', ', ' ); ?>
	</span>
</div>
