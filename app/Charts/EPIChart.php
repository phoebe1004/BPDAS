<?php

namespace App\Charts;

use App\Models\EpiCard;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class EPIChart
{
    protected $chart8;

    public function __construct(LarapexChart $chart8)
    {
        $this->chart8 = $chart8;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $epiIndication = EpiCard::select(DB::raw('COUNT("epi_indication") AS epi_indication_count'), 'epi_indication')
        ->groupBy('epi_indication')
        ->get();

        return $this->chart8->pieChart()
            ->setTitle('Expanded Program on Immunization')
            ->setSubtitle('For (0-5 years old)')
            ->setColors(['#F94A29','#F90716'])
            ->addData([
                $epiIndication->firstWhere('epi_indication', 'yes')?->epi_indication_count ?? 0,
                $epiIndication->firstWhere('epi_indication', 'no')?->epi_indication_count ?? 0,
            ])
            ->setLabels(['Yes', 'No']);
    }
}
