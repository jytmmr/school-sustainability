@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teaching/Learning Data Submit</div>
                <div class="panel-body">
                    HELLO {{auth()->user()->id}}
                    <h1>Submit Teaching and Learning Data</h1>
                    <form action="/teaching-data" method="POST">
                    {{ csrf_field() }}
                    Reading Percentile 1st Grade:
                    <input type="number" name="reading_percentile_1"  min="0" max="100" step="0.01"><br>
                    Reading Percentile 2nd Grade:
                    <input type="number" name="reading_percentile_2"  min="0" max="100" step="0.01"><br>
                    Reading Percentile 3rd Grade:
                    <input type="number" name="reading_percentile_3"  min="0" max="100" step="0.01"><br>    
                    Reading Percentile 4th Grade:
                    <input type="number" name="reading_percentile_4"  min="0" max="100" step="0.01"><br>    
                    Reading Percentile 5th Grade:
                    <input type="number" name="reading_percentile_5"  min="0" max="100" step="0.01"><br>    
                    Reading Percentile 6th Grade:
                    <input type="number" name="reading_percentile_6"  min="0" max="100" step="0.01"><br>    
                    Reading Percentile 7th Grade:
                    <input type="number" name="reading_percentile_7"  min="0" max="100" step="0.01"><br>    
                    Reading Percentile 8th Grade:
                    <input type="number" name="reading_percentile_8"  min="0" max="100" step="0.01"><br>
                    Math Percentile 1st Grade:    
                    <input type="number" name="math_percentile_1"  min="0" max="100" step="0.01"><br>
                    Math Percentile 2nd Grade:
                    <input type="number" name="math_percentile_2"  min="0" max="100" step="0.01"><br>
                    Math Percentile 3rd Grade:
                    <input type="number" name="math_percentile_3"  min="0" max="100" step="0.01"><br>    
                    Math Percentile 4th Grade:
                    <input type="number" name="math_percentile_4"  min="0" max="100" step="0.01"><br>    
                    Math Percentile 5th Grade:
                    <input type="number" name="math_percentile_5"  min="0" max="100" step="0.01"><br>    
                    Math Percentile 6th Grade:
                    <input type="number" name="math_percentile_6"  min="0" max="100" step="0.01"><br>    
                    Math Percentile 7th Grade:
                    <input type="number" name="math_percentile_7"  min="0" max="100" step="0.01"><br>    
                    Math Percentile 8th Grade:
                    <input type="number" name="math_percentile_8"  min="0" max="100" step="0.01"><br>    
                    ACT Composite By Ending School Year:
                    <input type="number" name="ACT_composite"  min="0" max="36" step="0.01"><br>
                    Percent of Students Ready for College Level English:
                    <input type="number" name="percent_students_college_english_ready"  min="0" max="100" step="0.01"><br>
                    Percent of Students Reading for College Level Math:
                    <input type="number" name="percent_students_college_math_ready"  min="0" max="100" step="0.01"><br>
                    Percent of Students Reading for College Level Reading:
                    <input type="number" name="percent_students_college_reading_ready"  min="0" max="100" step="0.01"><br>
                    Percent of Students Reading for College Level Science:
                    <input type="number" name="percent_students_college_science_ready"  min="0" max="100" step="0.01"><br>
                    Percent of Students that Met all Four ACT Readiness Benchmarks:
                    <input type="number" name="percent_students_all_ACT_benchmarks_met"  min="0" max="100" step="0.01"><br>
                    ACT Writing Subtest Composite:
                    <input type="number" name="ACT_writing_subtest_composite"  min="0" max="11" step="0.01"><br>
                    Percent of Students that Met or Exceeded ACT Projection:
                    <input type="number" name="percent_student_ACT_proj_met"  min="0" max="100" step="0.01"><br>
                    Fully Articulated, Standards Based, Biblically Integrated Curriculum:
                    <input type="checkbox" name="biblically_integrated_curric" checked data-toggle="toggle"><br>
                    Full Curriculum Review Cycle Interval:
                    <input type="number" name="curric_review_cycle_interval"  min="0" max="100" step="0.01"><br>
                    Number of Teacher Planning Periods:
                    <input type="number" name="num_teacher_planning_periods"  min="0" max="100" step="0.01"><br>
                    Average Number of Teacher Class Preparations:
                    <input type="number" name="avg_num_teacher_class_preps"  min="0" max="100" step="0.01"><br>
                    Average Number of Students a 6-12 Teacher Sees Per Day:
                    <input type="number" name="avg_num_students_6_12_teacher_sees_daily"  min="0" max="100" step="0.01"><br>
                    Average Student:Faculty Ratio (SFR) PREK Including Parapros:
                    <input type="number" name="avg_SFR_PREK"  min="0" max="10000"min="0" max="100" step="0.1"><br>
                    Average SFR K-2 Including Parapros:
                    <input type="number" name="avg_SFR_K_2"  min="0" max="10000" step="0.1"><br>
                    Average SFR 3-5 Including Parapros:
                    <input type="number" name="avg_SFR_3_5"  min="0" max="10000" step="0.1"><br>
                    Number of Faculty FTE per Exceptional Education Staff Member K-12:
                    <input type="number" name="num_facultyFTE_per_exceptional_staff_member_K_12"  min="0" max="100" step="0.01"><br>
                    Biannual Parent Satifaction Assessment:
                    <input type="checkbox" name="biannual_parent_satisfaction_assesment" checked data-toggle="toggle"><br>
                    Biannual Alumni Assessments (Measuring Impact of School Mission):
                    <input type="checkbox" name="biannual_alumni_mission_impact_assesment" checked data-toggle="toggle"><br>
                    <input type="submit" name="SubmitButton" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
