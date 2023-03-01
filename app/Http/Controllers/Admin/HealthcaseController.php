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
use App\Models\CovidBooster;
use App\Models\CovidPlus;
use App\Models\CovidVaccine;
use App\Models\EpiCard;
use App\Models\HealthInformation;
use App\Models\MrTd;
use App\Models\PersonalSocialHistory;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $residentHealthPurok = HealthInformation::with('resident')->get()->groupBy(['resident.purok']);

        // total health cases
        $totalHealthCases = $residentHealthPurok->flatten()->count();

        // medical by purok
        $residentHealthPurokCount  = $residentHealthPurok
            ->sortByDesc(fn($column) => $column->count() ?? 0)
            ->map(fn($column, $key) => [$column->count() ?? 0, $key])
            ->first();

        // medical history
        $residentHealthMedicalCount = HealthInformation::with('resident')->get()->groupBy(['medical_history']);
        $residentHealthMedicalCount  = $residentHealthMedicalCount
            ->sortByDesc(fn($column) => $column->count() ?? 0)
            ->map(fn($column, $key) => [$column->count() ?? 0, $key])
            ->first();

        // social
        // $personalSocialSmoker = PersonalSocialHistory::select(DB::raw('COUNT("smoker") AS total'), 'smoker')
        // ->groupBy('smoker')
        // ->firstWhere('smoker', 'yes');
        // $personalSocialSmoker->title = 'Smoker';
        // $personalSocialAlcohol = PersonalSocialHistory::select(DB::raw('COUNT("alcohol_beverages_drinker") AS total'), 'alcohol_beverages_drinker')
        // ->groupBy('alcohol_beverages_drinker')
        // ->firstWhere('alcohol_beverages_drinker', 'yes');
        // $personalSocialAlcohol->title = 'Alcohol Drinker';
        // $personalSocialSexual = PersonalSocialHistory::select(DB::raw('COUNT("sexually_active") AS total'), 'sexually_active')
        // ->groupBy('sexually_active')
        // ->firstWhere('sexually_active', 'yes');
        // $personalSocialSexual->title = 'Sexually Active';

        // $personalSocialCount = collect([$personalSocialSmoker, $personalSocialAlcohol, $personalSocialSexual]);
        // $personalSocialCount  = $personalSocialCount
        //     ->sortByDesc(fn($column) => $column->total ?? 0)
        //     ->map(fn($column, $key) => [$column->total ?? 0, $column->title])
        //     ->first();

        //epi
        // $epiIndicationCount = EpiCard::select(DB::raw('COUNT("epi_indication") AS total'), 'epi_indication')
        // ->groupBy('epi_indication')
        // ->orderByDesc('total')
        // ->get();

        // mrtd
        $mrIndicationCount = MrTd::select(DB::raw('COUNT("mr_indication") AS total'), 'mr_indication')
        ->groupBy('mr_indication')
        ->firstWhere('mr_indication', 'yes');
        $mrIndicationCount->title = $mrIndicationCount?->title ? 'Measles and Rubella' : '';
        $tdIndicationCount = MrTd::select(DB::raw('COUNT("td_indication") AS total'), 'td_indication')
        ->groupBy('td_indication')
        ->firstWhere('td_indication', 'yes');
        $tdIndicationCount->title = $tdIndicationCount?->title ? 'Tetanus and Diphtheria' : '';
        $mrtdCount = collect([$mrIndicationCount, $tdIndicationCount]);
        $mrtdCount  = $mrtdCount
            ->sortByDesc(fn($column) => $column->total ?? 0)
            ->map(fn($column, $key) => [$column->total ?? 0, $column->title ?? ''])
            ->first();

        // covid
        $cplusIndication = CovidPlus::select(DB::raw('COUNT("c_plus_indication") AS total'), 'c_plus_indication')
        ->groupBy('c_plus_indication')
        ->firstWhere('c_plus_indication', 'yes');
        $cplusIndication->title = $cplusIndication?->title ? 'Covid-19 Plus' : '';
        $cvacIndication = CovidVaccine::select(DB::raw('COUNT("c_vac_indication") AS total'), 'c_vac_indication')
        ->groupBy('c_vac_indication')
        ->firstWhere('c_vac_indication', 'yes');
        $cvacIndication->title = $cvacIndication?->title ? 'Covid-19 Vaccines' : '';
        $cboostIndication = CovidBooster::select(DB::raw('COUNT("c_boost_indication") AS total'), 'c_boost_indication')
        ->groupBy('c_boost_indication')
        ->firstWhere('c_boost_indication', 'yes');
        $cboostIndication = $cboostIndication?->title ? 'Covid-19 Boosters' : '';
        $covidVaccineCount = collect([$cplusIndication, $cvacIndication, $cboostIndication]);
        $covidVaccineCount  = $covidVaccineCount
            ->sortByDesc(fn($column) => $column->total ?? 0)
            ->map(fn($column, $key) => [$column->total ?? 0, $column->title ?? ''])
            ->first();

        return view('admin.healthcase.index',[
            'chart' => $chart->build(),
            'chart2' => $chart2->build(),
            'chart3' => $chart3->build(),
            'chart4' => $chart4->build(),
            'chart5' => $chart5->build(),
            'chart6' => $chart6->build(),
            'chart7' => $chart7->build(),
            'chart8' => $chart8->build(),
            'totalHealthCases' => $totalHealthCases ?? 0,
            'residentHealthPurokCount' => $residentHealthPurokCount[0] ?? 0,
            'residentHealthPurokCountText' => $residentHealthPurokCount[1] ?? '',
            'residentHealthMedicalCount' => $residentHealthMedicalCount[0] ?? 0,
            'residentHealthMedicalCountText' => $residentHealthMedicalCount[1] ?? '',
            'mrtdCount' => $mrtdCount[0] ?? 0,
            'mrtdCountText' => $mrtdCount[1] ?? '',
            'covidVaccineCount' => $covidVaccineCount[0] ?? 0,
            'covidVaccineCountText' => $covidVaccineCount[1] ?? '',
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
