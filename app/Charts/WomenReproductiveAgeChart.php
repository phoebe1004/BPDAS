<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class WomenReproductiveAgeChart
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart3->pieChart()
            ->setTitle('Family Planning Used')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#EB455F','#243763','#39B5E0'])
            ->addData([40, 50, 30])
            ->setLabels(['Yes', 'No', 'Not Applicable']);
    }
}
