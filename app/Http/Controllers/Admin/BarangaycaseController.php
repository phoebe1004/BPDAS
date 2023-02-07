<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barangaycase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;

class BarangaycaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangaycase = Barangaycase::all();
        return view('admin.barangaycase.index')->withBarangaycase($barangaycase);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barangaycase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $barangaycase = new Barangaycase();

        $barangaycase->age = $request->age;
        $barangaycase->complainant = $request->complainant;
        $barangaycase->type_case = $request->type_case;
        $barangaycase->case_specification = $request->case_specification;
        $barangaycase->date_filed = $request->date_filed;
        $barangaycase->case_status = $request->case_status;

        $barangaycase->save();

        return redirect()->route('barangaycases.index')->with('status','Barangaycase has been added successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangaycase = Barangaycase::find($id);
        $barangaycase->delete();

        return redirect()->route('barangaycases.index');
    }
}
