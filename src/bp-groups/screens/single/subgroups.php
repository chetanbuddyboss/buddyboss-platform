<?php
/**
 * Groups: Single group "Subgroups" screen handler
 *
 * @package BuddyBoss
 * @subpackage GroupsScreens
 * @since Buddyboss 3.1.1
 */

/**
 * Handle the loading of a single group's subgroups.
 *
 * @since Buddyboss 3.1.1
 */
function groups_screen_group_subgroups() {

	if ( ! bp_is_single_item() ) {
		return false;
	}



	/**
	 * Fires before the loading of a single group's subgroups page.
	 *
	 * @since Buddyboss 3.1.1
	 */
	do_action( 'groups_screen_group_subgroups' );

	/**
	 * Filters the template to load for a single group's subgroups page.
	 *
	 * @since Buddyboss 3.1.1
	 *
	 * @param string $value Path to a single group's template to load.
	 */
	bp_core_load_template( apply_filters( 'groups_screen_group_subgroups', 'groups/single/home' ) );

}