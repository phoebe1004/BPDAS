<?php

namespace App\Http\Controllers\Admin;

use App\Charts\COVIDChart;
use App\Charts\DengueCharts;
use App\Charts\EPIChart;
use App\Charts\HPVChart;
use App\Charts\MedicalHistoryByPurokChart;
use App\Charts\MRTDChart;
use App\Charts\PersonalSocialHistoryChart;
use App\Charts\WomenReproductiveAgeChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        MedicalHistoryByPurokChart $chart,
        PersonalSocialHistoryChart $chart2,
        WomenReproductiveAgeChart $chart3,
        HPVChart $chart4,
        MRTDChart $chart5,
        COVIDChart $chart6,
        DengueCharts $chart7,
        EPIChart $chart8,
    )
    {
        return view('admin.healthcase.index',[
            'chart' => $chart->build(),
            'chart2' => $chart2->build(),
            'chart3' => $chart3->build(),
            'chart4' => $chart4->build(),
            'chart5' => $chart5->build(),
            'chart6' => $chart6->build(),
            'chart7' => $chart7->build(),
            'chart8' => $chart8->build(),
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
