<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('reading_percentile_1');
            $table->integer('reading_percentile_2');
            $table->integer('reading_percentile_3');
            $table->integer('reading_percentile_4');
            $table->integer('reading_percentile_5');
            $table->integer('reading_percentile_6');
            $table->integer('reading_percentile_7');
            $table->integer('reading_percentile_8');
            $table->integer('math_percentile_1');
            $table->integer('math_percentile_2');
            $table->integer('math_percentile_3');
            $table->integer('math_percentile_4');
            $table->integer('math_percentile_5');
            $table->integer('math_percentile_6');
            $table->integer('math_percentile_7');
            $table->integer('math_percentile_8');
            $table->integer('ACT_composite');
            $table->integer('percent_students_college_english_ready');
            $table->integer('percent_students_college_math_ready');
            $table->integer('percent_students_college_reading_ready');
            $table->integer('percent_students_college_science_ready');
            $table->integer('percent_students_all_ACT_benchmarks_met');
            $table->integer('ACT_writing_subtest_composite');
            $table->integer('percent_student_ACT_proj_met');
            $table->boolean('biblically_integrated_curric');
            $table->integer('curric_review_cycle_interval');
            $table->integer('num_teacher_planning_periods');
            $table->integer('avg_num_teacher_class_preps');
            $table->integer('avg_num_students_6_12_teacher_sees_daily');
            $table->integer('avg_SFR_PREK');
            $table->integer('avg_SFR_K_2');
            $table->integer('avg_SFR_3_5');
            $table->integer('num_facultyFTE_per_exceptional_staff_member_K_12');
            $table->boolean('biannual_parent_satisfaction_assesment');
            $table->boolean('biannual_alumni_mission_impact_assesment');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teaching_datas');
    }
}
