<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DengueCharts
{
    protected $chart7;

    public function __construct(LarapexChart $chart7)
    {
        $this->chart7 = $chart7;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart7->donutChart()
            ->setTitle('Dengue Vaccine Data')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F94A29', '#FCE22A'])
            ->addData([20, 24])
            ->setLabels(['Yes', 'No']);
    }
}
