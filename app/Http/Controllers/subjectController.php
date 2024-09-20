<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subjects;
class subjectController extends Controller
{
    //
    public function index(){
        $subjects = subjects::all();
        $num_subj = count($subjects);
        return view('subjects', compact('subjects', 'num_subj'));
     }
     public function insert(Request $request){
        $new_subject =new Subjects;
        $new_subject-> subj_name = $request-> sj_name;
        if($request->fac_name==1){
            $fac_name="Facultyof Science";
            $new_subject->faculty = $fac_name;
        }
        else if($request->fac_name==2){
            $fac_name="College of Computing";
            $new_subject->faculty = $fac_name;
        }
        else if($request->fac_name==3){
            $fac_name="Faculty of Engineering";
            $new_subject->faculty = $fac_name;
        }
        else if($request->fac_name==4){
            $fac_name="Facultyof Education";
            $new_subject->faculty = $fac_name;
        }
        else if($request->fac_name==5){
            $fac_name="Faculty of LaW";
            $new_subject->faculty = $fac_name;
        }
        else if($request->fac_name==6){
            $fac_name="Faculty of Economics";
            $new_subject->faculty = $fac_name;
        }
        $new_subject->credit =$request->credit;
        $new_subject->save();
        // $subjects = subjects::all();
        // $num_subj = count($subjects);
        // return view('subjects', compact('subjects', 'num_subj'));
        return redirect('/subjects');
    }
    public function delete($number_id){
            $subject = subjects::destroy($number_id);
            return redirect('/subjects');
        }
    public function update($number_id){
            $subject = subjects::destroy($number_id);
            return redirect('/subjects');
        }
}
