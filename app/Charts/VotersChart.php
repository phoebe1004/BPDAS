<?php

namespace App\Charts;

use App\Models\RegisteredVoter;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class VotersChart
{
    protected $chart4;

    public function __construct(LarapexChart $chart4)
    {
        $this->chart4 = $chart4;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $residentVoters = RegisteredVoter::groupBy('reg_vot_indication')
        ->selectRaw('count(*) as total, reg_vot_indication')
        ->get();

        return $this->chart4->horizontalBarChart()
            ->setTitle('Count Of Registered Voter in Cabantian Davao City')
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('Voters',['total', $residentVoters->map(fn($row) => $row->total)->toArray()])
            ->setXAxis($residentVoters->map(fn($row) => $row->residentVoters)->toArray());
    }
}
