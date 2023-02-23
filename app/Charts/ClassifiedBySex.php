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
        // $residentSex = Resident::groupBy('sex')
        // ->selectRaw('count(*) as total, sex')
        // ->get();

        $maleCount = Resident::get()->where('sex', 'Male')->count();
        $femaleCount = Resident::get()->where('sex', 'Female')->count();

        return $this->chart3->pieChart()
            ->setTitle('Cabantian Sex Count')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([$maleCount, $femaleCount])
            ->setColors(['#775dd0', '#80effe'])
            ->setLabels(['Male','Female', $maleCount,$femaleCount]);
    }
}
