<?php
/**
 * Messages template tags
 *
 * @since BuddyPress 3.0.0
 * @version 3.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Fire specific hooks into the private messages template.
 *
 * @since BuddyPress 3.0.0
 *
 * @param string $when   Optional. Either 'before' or 'after'.
 * @param string $suffix Optional. Use it to add terms at the end of the hook name.
 */
function bp_nouveau_messages_hook( $when = '', $suffix = '' ) {
	$hook = array( 'bp' );

	if ( $when ) {
		$hook[] = $when;
	}

	// It's a message hook
	$hook[] = 'message';

	if ( $suffix ) {
		if ( 'compose_content' === $suffix ) {
			$hook[2] = 'messages';
		}

		$hook[] = $suffix;
	}

	bp_nouveau_hook( $hook );
}

/**
 * Load the new Messages User Interface
 *
 * @since BuddyPress 3.0.0
 */
function bp_nouveau_messages_member_interface() {
	/**
	 * Fires before the member messages content.
	 *
	 * @since BuddyPress 1.2.0
	 */
	do_action( 'bp_before_member_messages_content' );

	// Load the Private messages UI
	bp_get_template_part( 'common/js-templates/messages/index' );

	/**
	 * Fires after the member messages content.
	 *
	 * @since BuddyPress 1.2.0
	 */
	do_action( 'bp_after_member_messages_content' );
}

 /**
 * Output the Member's messages search form.
 *
 * @since BuddyPress 3.0.0
 * @since BuddyPress 3.2.0 Move the function into Template Tags and use a template part.
 */
function bp_nouveau_message_search_form() {
    $search_form_html = bp_buffer_template_part( 'common/js-templates/messages/search-form', null, false );

	/**
	 * Filters the private message component search form.
	 *
	 * @since BuddyPress 2.2.0
	 *
	 * @param string $search_form_html HTML markup for the message search form.
	 */
	echo apply_filters( 'bp_message_search_form', $search_form_html );
}
