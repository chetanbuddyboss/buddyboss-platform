

<input type="hidden" name="bp-ld-sync-enable" value="0" />
<label>
    <input
        type="checkbox"
        name="bp-ld-sync-enable"
        value="1"
        autocomplete="off"
        <?php checked($hasLdGroup, true); var_dump($hasLdGroup); ?>
    />
    <?php _e('Yes. I want this group to have a Learndash group', 'buddyboss'); ?>
</label>

<p>
    <b><?php _e('Associated Group:', 'buddyboss'); ?></b>

	<select name="bp-ld-sync-id" style="width: 100%; margin-top: 10px;" autocomplete="off">
	    <option value="0"><?php _e('None', 'buddyboss'); ?></option>
	    <?php foreach ($availableLdGroups as $group): ?>
	        <?php $selected = $group->ID == $ldGroupId? 'selected' : ''; ?>
	        <option value="<?php echo $group->id; ?>" <?php echo $selected; ?>>
	            <?php echo $group->post_title; ?> (ID: <?php echo $group->ID; ?>)
	        </option>
	    <?php endforeach; ?>
	</select>

	<?php if ($hasLdGroup): ?>
        <a href="<?php echo get_edit_post_link($ldGroupId); ?>" target="_blank">
            <?php _e('edit group', 'buddyboss'); ?>
        </a>
	<?php endif; ?>
</p>