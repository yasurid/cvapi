<?php

namespace App\Http\Controllers;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    //
    //
    public function index(){
        $appli = Applicant::all();
        return response()->json($appli,201);
    }
    public function update(Request $request, $id){
        $appli = Applicant::findOrFail($id);
        $appli->update($request->all());

       // return $article;
        return response()->json($appli,201);
    }
    public function soft_delete($id){
        $appli = Applicant::find($id);
        $appli->online_status = 1;
        $appli->update();

        // return $article;
        return response()->json($appli,201);
    }
    public function store(Request $request)
    {

        $applica = Applicant::create($request->all());

        return response()->json($applica,201);
        //return response()->json($request->all());

    }

}
