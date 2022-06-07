<?php

namespace Modules\Courses\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Courses\Entities\Intake;
use Modules\Courses\Entities\School;
use Modules\Courses\Entities\Classes;
use Modules\Courses\Entities\Department;
use Illuminate\Contracts\Support\Renderable;
use Modules\Courses\Entities\Campus;

class CoursesController extends Controller
{
    
    public function index()
    {
        return view('courses::index');
    }

    /**
     * Show the form for a new Intake Information.
     * 
     */
    public function addIntake(Request $request)
    {
        $projects = Intake::where([
            ['intake_name','!=',Null],
            [function($query) use($request){
                if(($term=$request->term)){
                    $query->orWhere('intake_name','LIKE','%'.$term. '%')->get();
                }
            }]
        ])->orderBy("id","desc")->paginate(2);
        return view('courses::intake.addIntake', compact('projects'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function storeIntake(Request $request)
    {
        $intakes                =    new Intake;
        $intakes->intake_name   =    $request->input('intake_name_from')."-".$request->input('intake_name_to')." ".date('Y');
        $intakes->save();

        return redirect()->route('courses.addIntake')->with('success','Intake Created successfuly');
    }

    public function showIntake()
    {   
        $data = Intake::all();
        return view('courses::intake.showIntake')->with('data',$data);
    }

  
    public function editIntake($id)
    {   
        $data    =   Intake::find($id);
        return view('courses::intake.editIntake')->with('data',$data);
    }


    public function updateIntake(Request $request, $id)
    {
        $data    =   Intake::find($id);
        $data->intake_name   =   $request->input('intake_name_from')."-".$request->input('intake_name_to')." ".date('Y');
        $data->update();
        return redirect()->route('courses.showIntake')->with('status','Data Updated Successfully');

    }

    public function destroyIntake($id)
    {
        $data  = Intake::find($id);
        $data->delete();
        return redirect()->route('courses.showIntake');
    }

    /**
     *
     * Information about School
    */
    public function addschool(){
        return view('courses::school.addSchool');
    }

    public function showSchool(){

        $data    =   School::all();
        return view('courses::school.showSchool')->with('data',$data);

    }

    public function editSchool($id){
        $data    =   School::find($id);
        return view('courses::school.editSchool')->with('data',$data);
    }

    public function updateSchool(Request $request, $id){
        $data    =   School::find($id);
        $data->name   =   $request->input('name');
        $data->update();
        return redirect()->route('courses.showSchool')->with('status','Data Updated Successfully');

    }

    public function storeSchool(Request $request){
       
        $schools         =     new School;
        $schools->name   =     $request->input('name');
        $schools->save();

        return redirect()->route('courses.addSchool')->with('success','School Created');
    }
    public function deleteSchool($id){
        $data  = School::find($id);
        $data->delete();
        return redirect()->route('courses.showSchool');

    }


    /**
     *
     * Information about departments
     */
    public function addDepartment(){
        $schools = School::all();
        return view('courses::department.addDepartment')->with('schools',$schools);
    }

    public function showDepartment()
    {
        $data = Department::all();
        return view('courses::department.showDepartment')->with('data',$data);
    }

    public function storeDepartment(Request $request){
        // $this->validate($request,[
        //     'name'     =>   'required',
        //     'school'   =>   'required'
        // ]);

        $departments             =       new Department;
        $departments->name       =       $request->input('name');
        $departments->school_id  =       $request->input('school');
        $departments->save();

        return redirect()->route('courses.addDepartment')->with('success','Department Created');
    }

    public function editDepartment($id){
        $data    =   Department::find($id);
        $schools = School::all();
        return view('courses::department.editDepartment')->with(['data'=>$data, 'schools'=>$schools]);
    }

    public function updateDepartment(Request $request, $id){
        $data    =   Department::find($id);
        $data->name       =       $request->input('name');
        $data->school_id  =       $request->input('school');       
         $data->update();
        return redirect()->route('courses.showDepartment')->with('status','Data Updated Successfully');
    }
     public function destroyDepartment($id){
        $data  = Department::find($id);
        $data->delete();
        return redirect()->route('courses.showDepartment');

    }

     /**
     *
     * Information about Course
    */
    public function addCourse(){
        $schools       =  School::all();
        $departments   =  Department::all();
        $campuses      =  Campus::all();
         return view('courses::course.addCourse')->with(['schools' => $schools, 'departments'=>$departments,'campuses'=> $campuses]);
        
    }
  

    public function storeCourse(Request $request){
      

        $courses                      =    new Course;
        $courses->course_name         =    $request->input('course_name');
        $courses->course_code         =    $request->input('course_code');
        $courses->course_duration     =    $request->input('course_duration');
        $courses->course_requirements =    $request->input('course_requirements');
        $courses->campus_id           =    $request->input('campus ');
        $courses->school_id           =    $request->input('school');
        $courses->department_id       =    $request->input('department');
        $courses->save();

        return redirect()->route('courses.addCourse')->with('success','Course Created');
    }

    public function showCourse()
    {
        $data = Course::all();
        return view('courses::course.showCourse')->with('data',$data);
    }

    public function addDepens(Request $request){
        $data = Department::select('name','id')->where('id',$request->id)->take(5)->get();

        return response()->json($data);
    }

    public function editCourse($id){
        $data    =   Course::find($id);
        return view('courses::course.editCourse')->with('data',$data);
    }

    public function updateCourse(Request $request, $id){
        $data    =   Course::find($id);
        $data->course_name         =    $request->input('course_name');
        $data->campus_id           =    $request->input('campus');
        $data->school_id           =    $request->input('school');
        $data->department_id       =    $request->input('department');
        $data->course_code         =    $request->input('course_code');
        $data->course_duration     =    $request->input('course_duration');
        $data->course_requirements =    $request->input('course_requirements');
        $data->update();
        return redirect()->route('courses.showCourse')->with('status','Data Updated Successfully');

    }
    public function destroyCourse($id){
        $data  = Course::find($id);
        $data->delete();
        return redirect()->route('courses.showCourse');

    }

    /**
     *
     * information about class
     */

    public function addClasses(){
        return view('courses::class.addClasses');
    }

    public function storeClasses(Request $request){

        $class         =    new Classes;
        $class->name   =    $request->input('name');
        $class->save();

        return redirect()->route('courses.addClasses')->with('success','Class Created');
    }

    public function showClasses()
    {
        $data = Classes::all();
        return view('courses::class.showClasses')->with('data',$data);
    }
    public function editClasses($id){
        $data    =   Classes::find($id);
        return view('courses::class.editClasses')->with('data',$data);
    }

    public function updateClasses(Request $request, $id){
        $data    =   Classes::find($id);
        $data->name   =   $request->input('name');
        $data->update();
        return redirect()->route('courses.showClasses')->with('status','Data Updated Successfully');
    }
     public function destroyClasses($id){
        $data  = Classes::find($id);
        $data->delete();
        return redirect()->route('courses.showClasses');

    }



}