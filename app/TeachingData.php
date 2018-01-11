<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingData extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'created_at',
        'reading_percentile_1','reading_percentile_2','reading_percentile_3', 'reading_percentile_4',
        'reading_percentile_5','reading_percentile_6','reading_percentile_7', 'reading_percentile_8',
        'math_percentile_1','math_percentile_2','math_percentile_3','math_percentile_4',
        'math_percentile_5','math_percentile_6','math_percentile_7','math_percentile_8',
        'ACT_composite', 'percent_students_college_english_ready', 'percent_students_college_math_ready',
        'percent_students_college_reading_ready', 'percent_students_college_science_ready',
        'percent_students_all_ACT_benchmarks_met', 'ACT_writing_subtest_composite', 'percent_student_ACT_proj_met',
        'biblically_integrated_curric', 'curric_review_cycle_interval', 'num_teacher_planning_periods',
        'avg_num_teacher_class_preps', 'avg_num_students_6_12_teacher_sees_daily',
        'avg_SFR_PREK', 'avg_SFR_K_2', 'avg_SFR_3_5', 'num_facultyFTE_per_exceptional_staff_member_K_12',
        'biannual_parent_satisfaction_assesment', 'biannual_alumni_mission_impact_assesment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'password', 'remember_token',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
