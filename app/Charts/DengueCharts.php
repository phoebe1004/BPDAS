<?php

namespace App\Charts;

use App\Models\Dengue;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class DengueCharts
{
    protected $chart7;

    public function __construct(LarapexChart $chart7)
    {
        $this->chart7 = $chart7;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $dengueIndication = Dengue::select(DB::raw('COUNT("dengue_indication") AS dengue_indication_count'), 'dengue_indication')
        ->groupBy('dengue_indication')
        ->get();

        return $this->chart7->donutChart()
            ->setTitle('Dengue Vaccine Data')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F94A29','#F90716'])
            ->addData([
                $dengueIndication->firstWhere('dengue_indication', 'yes')?->dengue_indication_count ?? 0,
                $dengueIndication->firstWhere('dengue_indication', 'no')?->dengue_indication_count ?? 0,
            ])
            ->setLabels(['Yes', 'No']);
    }
}
