<?php

namespace Buddyboss\LearndashIntegration\Buddypress\Generators;

use Buddyboss\LearndashIntegration\Library\ReportsGenerator;

class AllReportsGenerator extends ReportsGenerator
{
	public function __construct()
	{
		$this->completed_table_title = __('Completed Steps', 'buddyboss');
		$this->incompleted_table_title = __('Incomplete Steps', 'buddyboss');

		parent::__construct();
	}

	protected function columns()
	{
		return [
			'user_id'         => $this->column('user_id'),
			'user'            => $this->column('user'),
			'course_id'       => $this->column('course_id'),
			'course'          => $this->column('course'),
			'step'            => $this->column('step'),
			'start_date'      => $this->column('start_date'),
			'completion_date' => $this->column('completion_date'),
			'updated_date'    => $this->column('updated_date'),
			'time_spent'      => $this->column('time_spent'),
			'points'          => $this->column('points'),
		];
	}

	protected function formatData($activity)
	{
		return [
			'user_id'         => $activity->user_id,
			'user'            => $activity->user_display_name,
			'course_id'       => $activity->activity_course_id,
			'course'          => $activity->activity_course_title,
			// 'step'            => $this->activityStepLabel($activity),
			'step'            => $activity->post_title,
			'start_date'      => $activity->activity_started_formatted,
			'completion_date' => $this->completionDate($activity),
			'updated_date'    => $this->updatedDate($activity),
			'time_spent'      => $this->timeSpent($activity),
			'points'          => $this->coursePointsEarned($activity)
		];
	}

	protected function formatDataForDisplay($data, $activity)
	{
		return wp_parse_args([
			'step' => sprintf(
				'<a href="%s" target="_blank">%s</a>',
				get_permalink($activity->post_id),
				$activity->post_title
			)
		], $data);
	}

	protected function activityStepLabel($activity)
	{
		return get_post_type_object(learndash_get_post_type_slug($activity->activity_type))->labels->singular_name;
	}
}