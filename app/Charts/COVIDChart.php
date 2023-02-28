<?php

namespace App\Charts;

use App\Models\CovidBooster;
use App\Models\CovidPlus;
use App\Models\CovidVaccine;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class COVIDChart
{
    protected $chart6;

    public function __construct(LarapexChart $chart6)
    {
        $this->chart6 = $chart6;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $cplusIndication = CovidPlus::select(DB::raw('COUNT("c_plus_indication") AS c_plus_indication_count'), 'c_plus_indication')
        ->groupBy('c_plus_indication')
        ->get();

        $cvacIndication = CovidVaccine::select(DB::raw('COUNT("c_vac_indication") AS c_vac_indication_count'), 'c_vac_indication')
        ->groupBy('c_vac_indication')
        ->get();

        $cboostIndication = CovidBooster::select(DB::raw('COUNT("c_boost_indication") AS c_boost_indication_count'), 'c_boost_indication')
        ->groupBy('c_boost_indication')
        ->get();


        return $this->chart6->barChart()
            ->setTitle('COVID-19 DATA')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F90716','#06FF00'])
            ->addData('Yes', [
                $cplusIndication->firstWhere('c_plus_indication', 'yes')?->c_plus_indication_count ?? 0,
                $cvacIndication->firstWhere('c_vac_indication', 'yes')?->c_vac_indication_count ?? 0,
                $cboostIndication->firstWhere('c_boost_indication', 'yes')?->c_boost_indication_count ?? 0,
            ])
            ->addData('No', [
                $cplusIndication->firstWhere('c_plus_indication', 'no')?->c_plus_indication_count ?? 0,
                $cvacIndication->firstWhere('c_vac_indication', 'no')?->c_vac_indication_count ?? 0,
                $cboostIndication->firstWhere('c_boost_indication', 'no')?->c_boost_indication_count ?? 0,
            ])
            ->setXAxis(['COVID-19 Plus', 'COVID-19 Vaccines', 'COVID-19 Boosters']);
    }
}
