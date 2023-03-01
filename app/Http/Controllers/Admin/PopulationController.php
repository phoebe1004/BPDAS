<?php

namespace App\Http\Controllers\Admin;

use App\Charts\SESChart;
use App\Charts\SES1Chart;
use App\Charts\SES2Chart;
use App\Charts\SES3Chart;
use App\Charts\PurokChart;
use App\Models\Population;
use App\Charts\VotersChart;
use Illuminate\Http\Request;
use App\Charts\ClassifiedBySex;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Charts\SocialEconomicStatusChart;
use App\Charts\PopulationOfResidentsChart;
use App\Charts\PopulationOfResidentsBySexChart;
use App\Models\Resident;

class PopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        PopulationOfResidentsChart $chart,
        PopulationOfResidentsBySexChart $chart2,
        ClassifiedBySex $chart3, VotersChart $chart4,
        PurokChart $chart5,
        SESChart $chart6,
        SES1Chart $chart7,
        SES2Chart $chart8,
        SES3Chart $chart9
        )
    {
        $residentBySex = Resident::selectRaw('COUNT(sex) as total, sex')->groupBy('sex')->orderByDesc('total')->get();
        $residentByPurok = Resident::selectRaw('COUNT(purok) as total, purok')->groupBy('purok')->orderByDesc('total')->first();
        $residentByCivil = Resident::selectRaw('COUNT(civil_status) as total, civil_status')->groupBy('civil_status')->orderByDesc('total')->first();
        $totalResident = $residentBySex->sum('total') ?? 0;
        $residentBySex = $residentBySex->first();

        return view('admin.population.index',
        [
        'chart' => $chart->build(),
        'chart2' => $chart2->build(),
        'chart3' => $chart3->build(),
        'chart4' => $chart4->build(),
        'chart5' => $chart5->build(),
        'chart6' => $chart6->build(),
        'chart7' => $chart7->build(),
        'chart8' => $chart8->build(),
        'chart9' => $chart9->build(),
        'residentBySex' => $residentBySex->total ?? 0,
        'residentBySexText' => $residentBySex?->sex,
        'residentByPurok' => $residentByPurok->total ?? 0,
        'residentByPurokText' => $residentByPurok?->purok,
        'residentByCivil' => $residentByCivil->total ?? 0,
        'residentByCivilText' => $residentByCivil?->civil_status,
        'totalResident' => $totalResident,
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
