<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resident;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resident = Resident::all();
        return view('admin.resident.index')->withResident($resident);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resident.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'age' => 'required',
        //     'sex' => 'required',
        //     'birthdate' => 'required',
        //     'civilStatus' => 'required',
        //     'servicesAcquired' => 'required',
        //     'nutritionalStatus' => 'required',
        //     'employmentStatus' => 'required',
        //     'pwdStatus' => 'required',

        // ]);

        $resident = new Resident();

        $resident->name = $request->name;
        $resident->age = $request->age;
        $resident->sex = $request->sex;
        $resident->birthdate = $request->birthdate;
        $resident->civil_status = $request->civil_status;
        $resident->services_acquired = $request->services_acquired;
        $resident->nutritional_status = $request->nutritional_status;
        $resident->employment_status = $request->employment_status;
        $resident->pwd_status = $request->pwd_status;

       $resident->save();

        return redirect()->route('residents.index')->with('status','Resident has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::find($id);
        return view('admin.resident.edit')->with("resident", $resident);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'age' => 'required',
        //     'sex' => 'required',
        //     'birthdate' => 'required',
        //     'civilStatus' => 'required',
        //     'servicesAcquired' => 'required',
        //     'nutritionalStatus' => 'required',
        //     'employmentStatus' => 'required',
        //     'pwdStatus' => 'required',

        // ]);

        $resident = Resident::find($id);
        $resident->name = $request->name;
        $resident->age = $request->age;
        $resident->sex = $request->sex;
        $resident->birthdate = $request->birthdate;
        $resident->civil_status = $request->civil_status;
        $resident->services_acquired = $request->services_acquired;
        $resident->nutritional_status = $request->nutritional_status;
        $resident->employment_status = $request->employment_status;
        $resident->pwd_status = $request->pwd_status;

        $resident->save();

        return redirect()->route('residents.index')->with('status','Resident has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resident = Resident::find($id);
        $resident->delete();

        return redirect()->route('residents.index');
    }
}
