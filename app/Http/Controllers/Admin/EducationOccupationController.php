<?php

namespace App\Http\Controllers\Admin;

use App\Charts\AttainmentChart;
use App\Charts\OccupationChart;
use App\Http\Controllers\Controller;
use App\Models\EducOccupation;
use Illuminate\Http\Request;

class EducationOccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        AttainmentChart $chart,
        OccupationChart $chart2
    )
    {
        $mostUneducatedByPurok = EducOccupation::with('resident')->where('education', 'None')->get()->groupBy(['resident.purok']);
        $uneducatedTotal = $mostUneducatedByPurok->flatten()->count();
        $mostUneducatedByPurok  = $mostUneducatedByPurok
        ->sortByDesc(fn($column) => $column->count() ?? 0)
        ->map(fn($column, $key) => [$column->count() ?? 0, $key])
        ->first();

        $mostUnemployedByPurok = EducOccupation::with('resident')->where('occupation', 'Unemployed')->get()->groupBy(['resident.purok']);
        $mostUnemployedTotal = $mostUnemployedByPurok->flatten()->count();
        $mostUnemployedByPurok  = $mostUnemployedByPurok
        ->sortByDesc(fn($column) => $column->count() ?? 0)
        ->map(fn($column, $key) => [$column->count() ?? 0, $key])
        ->first();

        return view('admin.education_occupation.index',[
            'chart' => $chart->build(),
            'chart2' => $chart2->build(),
            'mostUneducatedByPurok' => $mostUneducatedByPurok[0] ?? 0,
            'mostUneducatedByPurokText' => $mostUneducatedByPurok[1],
            'uneducatedTotal' => $uneducatedTotal,
            'mostUnemployedByPurok' => $mostUnemployedByPurok[0] ?? 0,
            'mostUnemployedByPurokText' => $mostUnemployedByPurok[1],
            'mostUnemployedTotal' => $mostUnemployedTotal,
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
