<?php

namespace App\Http\Controllers;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    //
    public function index(){
        $appli = Jobs::all();
        return response()->json($appli,201);
    }
    public function update(Request $request, $id){
        $appli = Jobs::findOrFail($id);
        $appli->update($request->all());

       // return $article;
        return response()->json($appli,201);
    }
    public function soft_delete($id){
        $appli = Jobs::find($id);
        $appli->online_status = 1;
        $appli->update();

        // return $article;
        return response()->json($appli,201);
    }
    public function store(Request $request)
    {

        $applica = Jobs::create($request->all());

        return response()->json($applica,201);
        //return response()->json($request->all());

    }

}
