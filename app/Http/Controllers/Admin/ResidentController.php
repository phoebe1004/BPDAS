<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Resident;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ResidentImport;
use Excel;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $resident = Resident::where('completed', 0)->get();
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
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'suffix' => 'required',
            'purok' => 'required',
            'address' => 'required',
            'emailaddress' => 'required',
            'contactnumber' => 'required',
            'birthdate' => 'required',
            'sex' => 'required',
            'civil_status' => 'required',
            'services_acquired' => 'required',
            'nutritional_status' => 'required',
            'employment_status' => 'required',
            'pwd_status' => 'required',
        ]);
        // if($validate->fails()){
        //     return back()->withErrors($validate->errors())->withInput();
        //   }
        $resident = new Resident();

        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->suffix = $request->suffix;
        $resident->purok = $request->purok;
        $resident->address = $request->address;
        $resident->emailaddress = $request->emailaddress;
        $resident->contactnumber = $request->contactnumber;
        $resident->birthdate = $request->birthdate;
        $resident->sex = $request->sex;
        $resident->civil_status = $request->civil_status;
        $resident->services_acquired = $request->services_acquired;
        $resident->nutritional_status = $request->nutritional_status;
        $resident->employment_status = $request->employment_status;
        $resident->pwd_status = $request->pwd_status;

        $age = Carbon::parse($resident->birthdate)->age;
        $resident->age= $age;
        // dd($age);
        $resident->completed = 0;
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
        $resident = Resident::where('id', $id)->first();

        return view("admin.resident.show")->with("resident", $resident);
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
        $validation = $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'suffix' => 'required',
            'purok' => 'required',
            'address' => 'required',
            'emailaddress' => 'required',
            'contactnumber' => 'required',
            'birthdate' => 'required',
            'sex' => 'required',
            'civil_status' => 'required',
            'services_acquired' => 'required',
            'nutritional_status' => 'required',
            'employment_status' => 'required',
            'pwd_status' => 'required',

        ]);

        $resident = Resident::find($id);

        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->suffix = $request->suffix;
        $resident->purok = $request->purok;
        $resident->address = $request->address;
        $resident->emailaddress = $request->emailaddress;
        $resident->contactnumber = $request->contactnumber;
        $resident->birthdate = $request->birthdate;
        $resident->sex = $request->sex;
        $resident->civil_status = $request->civil_status;
        $resident->services_acquired = $request->services_acquired;
        $resident->nutritional_status = $request->nutritional_status;
        $resident->employment_status = $request->employment_status;
        $resident->pwd_status = $request->pwd_status;


        $age = Carbon::parse($resident->birthdate)->age;
        $resident->age= $age;

        $resident->save();

        return redirect()->route('residents.index')->with('status','Resident has been updated successfully');
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
    public function importForm(){
        $resident = Resident::all();
        return view('admin.resident.csv')->with('resident', $resident);

    }
    public function import(Request $request){
        Excel::import(new ResidentImport, $request->file);
        return redirect()->route('residents.index')->with('status','Resident imported Successfully');
    }
    public function done($id)
    {
        $resident = Resident::orderBy('created_at', 'asc')->get();

        return view('resident', [
            'resident' => $resident
        ]);

        return view('admin.resident.completed')->with("resident", $resident);
    }
    public function completed()
    {
        $residents = Resident::where('completed', 1)->get();

        return view('admin.resident.completed')->with("residents", $residents);
    }
}

