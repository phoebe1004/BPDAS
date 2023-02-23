<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BackyardGardeningChart
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart3->pieChart()
            ->setTitle('Residents Backyard Gardening')
            ->setSubtitle('Baranagay Cabantian Davao City')
            ->addData([40, 50,])
            ->setLabels(['Yes', 'No']);
    }
}
