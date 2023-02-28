<?php

namespace App\Charts;

use App\Models\MrTd;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class MRTDChart
{
    protected $chart5;

    public function __construct(LarapexChart $chart5)
    {
        $this->chart5 = $chart5;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $mrIndication = MrTd::select(DB::raw('COUNT("mr_indication") AS mr_indication_count'), 'mr_indication')
        ->groupBy('mr_indication')
        ->get();

        $tdIndication = MrTd::select(DB::raw('COUNT("td_indication") AS td_indication_count'), 'td_indication')
        ->groupBy('td_indication')
        ->get();

        return $this->chart5->barChart()
            ->setTitle('Measles-Rubella-Tetanus-Diphtheria Vaccines')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#9A0680','#064663'])
            ->addData('Yes', [
                $mrIndication->firstWhere('mr_indication', 'yes')?->mr_indication_count ?? 0,
                $tdIndication->firstWhere('td_indication', 'yes')?->td_indication_count ?? 0,
            ])
            ->addData('No', [
                $mrIndication->firstWhere('mr_indication', 'no')?->mr_indication_count ?? 0,
                $tdIndication->firstWhere('td_indication', 'no')?->td_indication_count ?? 0,
            ])
            ->setXAxis(['Measles and Rubella', 'Tetanus and Diphtheria']);
    }
}
