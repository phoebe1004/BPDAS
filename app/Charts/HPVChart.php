<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class HPVChart
{
    protected $chart4;

    public function __construct(LarapexChart $chart4)
    {
        $this->chart4 = $chart4;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart4->donutChart()
            ->setTitle('Human papillomavirus (HPV)')
            ->setSubtitle('Female age (9/13 Years Old)')
            ->setColors(['#EB455F','#7DB9B6'])
            ->addData([20, 24])
            ->setLabels(['Yes', 'No']);
    }
}
