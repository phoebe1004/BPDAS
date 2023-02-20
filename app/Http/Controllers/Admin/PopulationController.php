<?php

namespace App\Http\Controllers\Admin;

use App\Models\Population;
use Illuminate\Http\Request;
use App\Charts\ClassifiedBySex;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Charts\SocialEconomicStatusChart;
use App\Charts\PopulationOfResidentsChart;
use App\Charts\PopulationOfResidentsBySexChart;

class PopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PopulationOfResidentsChart $chart,PopulationOfResidentsBySexChart $chart2,ClassifiedBySex $chart3, SocialEconomicStatusChart $chart4)
    {
        return view('admin.population.index', ['chart' => $chart->build(), 'chart2' => $chart2->build(), 'chart3' => $chart3->build(), 'chart4' => $chart4->build()]);

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
