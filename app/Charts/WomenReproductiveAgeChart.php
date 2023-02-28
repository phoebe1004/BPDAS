<?php

namespace App\Charts;

use App\Models\WomensReproductiveAge;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class WomenReproductiveAgeChart
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $personalSocialSmoker = WomensReproductiveAge::select(DB::raw('COUNT("family_planning_use") AS family_planning_use_count'), 'family_planning_use')
        ->groupBy('family_planning_use')
        ->get();

        return $this->chart3->pieChart()
            ->setTitle('Family Planning Used')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#EB455F','#243763','#39B5E0'])
            ->addData([
                $personalSocialSmoker->firstWhere('family_planning_use', 'yes')?->family_planning_use_count ?? 0,
                $personalSocialSmoker->firstWhere('family_planning_use', 'no')?->family_planning_use_count ?? 0,
                $personalSocialSmoker->firstWhere('family_planning_use', 'Not Applicable')?->family_planning_use_count ?? 0,
            ])
            ->setLabels(['Yes', 'No', 'Not Applicable']);
    }
}
