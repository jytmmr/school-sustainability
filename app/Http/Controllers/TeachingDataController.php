<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeachingData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class TeachingDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  Auth::user();
    }

    public function create(Request $request) {
        $teachingData = new TeachingData();

        $teachingData->user_id = Auth::user()->getAuthIdentifier();
        $teachingData->reading_percentile_8 = $request->input('reading_percentile_8') || null;
        $teachingData->math_percentile_8 = $request->input('math_percentile_8') || null;
        $teachingData->ACT_composite = $request->input('ACT_composite') || null;
        $teachingData->percent_students_college_english_ready = $request->input('percent_students_college_english_ready') || null;
        $teachingData->percent_students_college_math_ready = $request->input('percent_students_college_math_ready') || null;
        $teachingData->percent_students_college_reading_ready = $request->input('percent_students_college_reading_ready') || null;
        $teachingData->percent_students_college_science_ready = $request->input('percent_students_college_science_ready') || null;
        $teachingData->percent_students_all_ACT_benchmarks_met = $request->input('percent_students_all_ACT_benchmarks_met') || null;
        $teachingData->ACT_writing_subtest_composite = $request->input('ACT_writing_subtest_composite') || null;
        $teachingData->percent_student_ACT_proj_met = $request->input('percent_student_ACT_proj_met') || null;
        $teachingData->biblically_integrated_curric = $request->input('biblically_integrated_curric') == 'on' ? true : false;
        $teachingData->curric_review_cycle_interval = $request->input('curric_review_cycle_interval') || null;
        $teachingData->num_teacher_planning_periods = $request->input('num_teacher_planning_periods') || null;
        $teachingData->avg_num_teacher_class_preps = $request->input('avg_num_teacher_class_preps') || null;
        $teachingData->avg_num_students_6_12_teacher_sees_daily = $request->input('avg_num_students_6_12_teacher_sees_daily') || null;
        $teachingData->avg_SFR_PREK = $request->input('avg_SFR_PREK') || null;
        $teachingData->avg_SFR_K_2 = $request->input('avg_SFR_K_2') || null;
        $teachingData->avg_SFR_3_5 = $request->input('avg_SFR_3_5') || null;
        $teachingData->num_facultyFTE_per_exceptional_staff_member_K_12 = $request->input('num_facultyFTE_per_exceptional_staff_member_K_12') || null;
        $teachingData->biannual_parent_satisfaction_assesment = $request->input('biannual_parent_satisfaction_assesment') == 'on' ? true : false;
        $teachingData->biannual_alumni_mission_impact_assesment = $request->input('biannual_alumni_mission_impact_assesment') == 'on' ? true : false;
        $teachingData->save();
//        return redirect('/teaching-data-review')->
        return redirect("/teaching-data-review")->with(['teachingData' => $teachingData]);
    }


    public function viewSubmission(){
        return view('teaching-data-submit');
    }

    public function viewDataReview(){
        return view('teaching-data-review', ['teachingData' =>Session::get('teachingData')]);
    }

    public function index () {

        $data = array('name' => 'San Juan',
            'date' => date('Y-m-d'));

        return view('teaching-data-review')->with($data);

    }
}
