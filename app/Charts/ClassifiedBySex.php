<?php

namespace App\Charts;

use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class ClassifiedBySex
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $residentSex = Resident::groupBy('sex')
        ->selectRaw('count(*) as total, sex')
        ->get();

        return $this->chart3->pieChart()
            ->setTitle('Cabantian Residents Sex Count')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData(['total', $residentSex->map(fn($row) => $row->total)->toArray()])
            ->setLabels(['Male', 'Female']);
    }
}
