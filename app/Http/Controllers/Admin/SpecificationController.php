<?php

namespace App\Http\Controllers\Admin;

use App\Charts\BackyardGardeningChart;
use App\Charts\WaterSourceChart;
use App\Charts\SanitaryToiletChart;
use App\Charts\WasteManagementChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        WaterSourceChart $chart,
        SanitaryToiletChart $chart1,
        WasteManagementChart $chart2,
        BackyardGardeningChart $chart3
    )
    {
        return view('admin.specification.index',[
            'chart' => $chart->build(),
            'chart1' => $chart1->build(),
            'chart2' => $chart2->build(),
            'chart3' => $chart3->build(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
