<?php
/**
 * Sent Invites: User's "Sent Invites" screen handler
 *
 * @package BuddyBoss
 * @subpackage InviteScreens
 * @since BuddyBoss 3.1.1
 */

/**
 * Handle the loading of the Invites > Sent Invites page.
 *
 * @since BuddyBoss 3.1.1
 */
function bp_invites_screen_send_invite() {

	if ( bp_action_variables() ) {
		bp_do_404();
		return;
	}

	add_action( 'bp_template_content', 'bp_invites_send_invite_screen' );

	/**
	 * Filters the template to load for the Invites > Sent Invites page.
	 *
	 * @since BuddyBoss 3.1.1
	 *
	 * @param string $value Path to the Invites > Sent Invites page template to load.
	 */
	bp_core_load_template( apply_filters( 'bp_invites_screen_send_invite', 'members/single/plugins' ) );
}

function bp_invites_send_invite_screen() {
	bp_get_template_part( 'members/single/invites');
}