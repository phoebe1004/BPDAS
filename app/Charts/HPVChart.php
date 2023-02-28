<?php

namespace App\Charts;

use App\Models\Hpv;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class HPVChart
{
    protected $chart4;

    public function __construct(LarapexChart $chart4)
    {
        $this->chart4 = $chart4;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $hpvIndication = Hpv::select(DB::raw('COUNT("hpv_indication") AS hpv_indication_count'), 'hpv_indication')
        ->groupBy('hpv_indication')
        ->get();

        return $this->chart4->donutChart()
            ->setTitle('Human papillomavirus (HPV)')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#EB455F','#7DB9B6'])
            ->addData([
                $hpvIndication->firstWhere('hpv_indication', 'yes')?->hpv_indication_count ?? 0,
                $hpvIndication->firstWhere('hpv_indication', 'no')?->hpv_indication_count ?? 0,
            ])
            ->setLabels(['Yes', 'No']);
    }
}
