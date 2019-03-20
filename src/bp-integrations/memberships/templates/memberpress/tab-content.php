<?php echo !defined('ABSPATH') ? die("Sorry, you can't access this directly - Security established") : '';
foreach ($lmsTypes as $lmsType) {
	if ($lmsType == LD_POST_TYPE) { ?>

<div class="product_options_page learndash">
    <div class="product-options-panel">
        <!-- Enroll User -->
        <input id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-is_enabled"
        name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-is_enabled" type="checkbox" value="1" <?php checked($isEnabled)?>/>

        <label for="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-is_enabled">
            <?php echo _e('Enroll user in Learndash course(s) after purchasing this membership.', 'bpms'); ?>
        </label>

        <div id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-courses_wrapper" style="display:<?php echo $isEnabled ? 'block' : 'none'; ?>" >

        <div class="post-body-content">
                <!-- Course Access method -->
                <label for="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-course_access_method" style="float: left;padding: 5px">
                <?php echo _e('Course access:', 'bpms'); ?>
                </label>
                <select id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-course_access_method" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-course_access_method">
                    <?php foreach ($accessMethods as $key => $text) {?>
                    <option value="<?php echo $key; ?>" <?php echo $key == $courseAccessMethod ? "selected" : '' ?>><?php echo $text; ?></option>
                <?php }?>
                </select>

                <div id="all-course-helper-text" class="helper-text" style="padding-top : 15px" >
                <?php echo _e('Enrolls the user into all existing Learndash courses, and to any courses added in future.', 'bpms'); ?>
                </div>

                <div id="single-course-helper-text" class="helper-text" style="padding-top : 15px" >
                <?php echo _e('Enrolls the user into a single course, or to a set of courses all at once. Select from the courses below:', 'bpms'); ?>
                </div>

                 <div id="groups-helper-text" class="helper-text" style="padding-top : 15px" >
                 <?php echo _e('Enrolls the user into a course(s) of this particular group. Select from the groups below:', 'bpms'); ?>
                </div>

              </div>

              <!-- Search Course  -->
              <div id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-search_courses_wrapper"><select id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-courses_enrolled" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-courses_enrolled[]"></select>
              </div>


              <!-- Learndash Groups(for courses)  -->
              <div id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-search_groups_wrapper"><select id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-groups_attached" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-groups_attached[]"></select>
              </div>


            <!-- IF Buddyboss Theme -->
            <?php if ($themeName == "BuddyBoss Theme") {?>
            <div class="post-body-content" style="padding-top: 30px">

                <!-- Allow Purchasing -->
                <input id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-allow_from_pricebox" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-allow_from_pricebox" type="checkbox" value="1" <?php checked($allowFromPricebox)?> />

                <label for="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-allow_from_pricebox">
                <?php echo _e('Allow purchasing this product from the course price box.', 'bpms'); ?>
                </label>

                <div id="bpms-allow_purchase_wrapper">

                  <div class="post-body-content">
                    <label for="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_text"><?php echo _e('Button text:', 'bpms'); ?>
                    </label>
                    <input type="text" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_text" id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_text" placeholder="Purchase" value="<?php echo $buttonText; ?>"/>
                  </div>

                  <div class="post-body-content">
                    <label for="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_order"><?php echo _e('Button order:', 'bpms'); ?>
                    <input type="text" name="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_order" id="bpms-<?php echo $lmsType . '-' . $membershipType; ?>-purchase_button_order" placeholder="0" size="3" value="<?php echo $buttonOrder; ?>"/>
                    </label>
                  </div>

                </div>
            </div>
            </div>
            <?php }?>
    </div>
</div>
<?php } else { /* NOTE : Implementation for another LMS when required */}}?>
<style type="text/css">
.select2-container {
    width: 95% !important;
}
.select2-container .select2-selection__rendered > *:first-child.select2-search--inline {
    width: 95% !important;
}
.select2-container .select2-selection__rendered > *:first-child.select2-search--inline .select2-search__field {
    width: 95% !important;
}

</style>