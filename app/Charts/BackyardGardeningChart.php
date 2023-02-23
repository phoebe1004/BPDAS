<?php

namespace App\Charts;

use App\Models\BackyardGardening;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class BackyardGardeningChart
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $backyardGardening = BackyardGardening::select(DB::raw('COUNT("gardening_indication") AS gardening_indication_count'), 'gardening_indication')
        ->groupBy('gardening_indication')
        ->get();

        return $this->chart3->pieChart()
            ->setTitle('Residents Backyard Gardening')
            ->setSubtitle('Baranagay Cabantian Davao City')
            ->addData([
                $backyardGardening->firstWhere('gardening_indication', 'yes')->gardening_indication_count ?? 0,
                $backyardGardening->firstWhere('gardening_indication', 'no')->gardening_indication_count ?? 0
            ])
            ->setLabels(['Yes', 'No']);
    }
}
