<?php

namespace App\Http\Controllers;

use App\Models\Abiturient;
use Illuminate\Http\Request;
use App\Models\Speciality;
use App\Models\Documenttype;

class AbiturientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = ['main_data' => Abiturient::latest()->get()];
        return view('main', $context);
        // return view('main', ['main_data' =>  Abiturient::latest()->get()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abi_create_form', ['cpec_list' => Speciality::get(), 'doc_list' => Documenttype::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
        // $validated = $request->validate([
        //     'firstName' => 'required|string|max:100',
        //     'specialities_id' => 'required|exists:App\Models\Speciality,id',
        // ]);

        $create = Abiturient::create([
            'last_name' => $request->lastName,
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'seria' => $request->seria,
            'nomer' => $request->nomer,
            'passport' => $request->passport,
            'inn' => $request->inn,
            'snils' => $request->snils,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'citizenship' => $request->citizenship,
            'specialities_id' => $request->specialities,
            'documenttypes_id' => $request->documenttypes,
            'series_doc' => $request->series_doc,
            'number_doc' => $request->number_doc,
            'date_of' => $request->date_of,
            'date_sub' => $request->date_sub,
            'reg_number' => null,
            'home_status' => $request->home_status,
            // Дальше по аналогии
        ]);
        // dd($create->reg_number);
        $create->reg_number = $create->id.$create->speciality->shortcut;
        $create->save();
        // $create::update(['reg_number' => '000111']);

        if($create){
            return redirect()->route('main_index')->with('abi_create_success', 1);
        }else{
            return redirect()->route('main_index')->with('abi_create_success', 0);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abiturient  $abiturient
     * @return \Illuminate\Http\Response
     */
    public function show(Abiturient $abiturient)
    {

        return view('abiturient', ['dataview' => $abiturient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abiturient  $abiturient
     * @return \Illuminate\Http\Response
     */
    public function edit(Abiturient $abiturient)
    {
        return view('edit', ['abiturient' => $abiturient, 'cpec_list' => Speciality::get()]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abiturient  $abiturient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abiturient $abiturient)
    {
        // dd($request->lastName);
        $update = Abiturient::where('id', $abiturient->id)->update([
            'last_name' => $request->lastName,
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'seria' => $request->seria,
            'nomer' => $request->nomer,
            'passport' => $request->passport,
            'address' => $request->address,
            'citizenship' => $request->citizenship,
            'snils' => $request->snils,
            'telephone' => $request->telephone,
            'inn' => $request->inn,
            'specialities_id' => $request->specialities
        ]);


        if($update){
            return redirect()->route('main_index')->with('update_success', 1);
        }else{
            return redirect()->route('main_index')->with('update_success', 0);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abiturient  $abiturient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abiturient $abiturient)
    {
        $destroy = $abiturient->delete();

        if($destroy){
            return redirect()->route('main_index')->with('delete_success', 1);
        }else{
            return redirect()->route('main_index')->with('delete_success', 0);
        }
    }
}
