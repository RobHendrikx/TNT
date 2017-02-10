<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getStudent($id){
        $student = DB::table('instanties')->where('id', '=', $id)->first();
        $companies = DB::table('company')->get();
        if(empty($student)){
            return redirect()->back()->withErrors('Student bestaat niet');
        }
        return view('pages.students')->withStudent($student)->withCompanies($companies);
    }

    public function postStudent(Request $request, $id){
        $this->validate($request, array(
            'Voornaam' => 'required|max:255',
            'Achternaam' => 'required|max:255',
            'company' => 'required',
        ));
        $company_value = ($request->company == "geen" ? null : $request->company);
        DB::table('instanties')
            ->where('id', $id)
            ->update(
                [
                    'Voornaam' => $request->Voornaam,
                    'Achternaam' => $request->Achternaam,
                    'fk_company' => $company_value
                ]
            );

        return redirect()->route('getStudent', $id)->withSuccess('Student was opgeslagen...');
    }
}


