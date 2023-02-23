<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class COVIDChart
{
    protected $chart6;

    public function __construct(LarapexChart $chart6)
    {
        $this->chart6 = $chart6;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart6->barChart()
            ->setTitle('COVID-19 DATA')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F90716','#06FF00'])
            ->addData('Yes', [6, 9, 3])
            ->addData('No', [7, 3, 8])
            ->setXAxis(['COVID-19 Plus', 'COVID-19 Vaccines', 'COVID-19 Boosters']);
    }
}
