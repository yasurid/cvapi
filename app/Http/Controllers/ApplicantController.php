<?php

namespace App\Http\Controllers;
use App\Models\applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    //
    //
    public function createApplicant(Request $request)
    {
       // $request1 = json_decode($request);
       /* $applicant = new applicant();
        $applicant->applicantName = $request->input('applicantName');
        $applicant->address = $request->input('address');
        $applicant->dateofbirth = $request->input('dateofbirth');
        $applicant->contactNo = $request->input('contactNo');
        $applicant->email = $request->input('email');
        $applicant->userId = $request->input('userId');
        $applicant->save(); */
        ///return response()->json($request);
        return applicant::create($request->all());
     
    }
}
