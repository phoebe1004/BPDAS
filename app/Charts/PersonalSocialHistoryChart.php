<?php

namespace App\Charts;

use App\Models\PersonalSocialHistory;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class PersonalSocialHistoryChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart2 = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $personalSocialSmoker = PersonalSocialHistory::select(DB::raw('COUNT("smoker") AS smoker_count'), 'smoker')
        ->groupBy('smoker')
        ->get();
        $personalSocialAlcohol = PersonalSocialHistory::select(DB::raw('COUNT("alcohol_beverages_drinker") AS alcohol_beverages_drinker_count'), 'alcohol_beverages_drinker')
        ->groupBy('alcohol_beverages_drinker')
        ->get();
        $personalSocialSexual = PersonalSocialHistory::select(DB::raw('COUNT("sexually_active") AS sexually_active_count'), 'sexually_active')
        ->groupBy('sexually_active')
        ->get();

        return $this->chart2->horizontalBarChart()
            ->setTitle('Personal Social History')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#D2001A','#FFDE00'])
            ->addData('Yes', [
                $personalSocialSmoker->firstWhere('smoker', 'yes')?->smoker_count ?? 0,
                $personalSocialAlcohol->firstWhere('alcohol_beverages_drinker', 'yes')?->alcohol_beverages_drinker_count ?? 0,
                $personalSocialSexual->firstWhere('sexually_active', 'yes')?->sexually_active_count ?? 0,
            ])
            ->addData('No', [
                $personalSocialSmoker->firstWhere('smoker', 'no')?->smoker_count ?? 0,
                $personalSocialAlcohol->firstWhere('alcohol_beverages_drinker', 'no')?->alcohol_beverages_drinker_count ?? 0,
                $personalSocialSexual->firstWhere('sexually_active', 'no')?->sexually_active_count ?? 0,
            ])
            ->setXAxis(['Smoker', 'Alcohol Beverages Drinker', 'Sexually Active']);
    }
}
