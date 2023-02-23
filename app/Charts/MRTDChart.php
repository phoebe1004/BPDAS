<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MRTDChart
{
    protected $chart5;

    public function __construct(LarapexChart $chart5)
    {
        $this->chart5 = $chart5;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart5->barChart()
            ->setTitle('Measles-Rubella-Tetanus- Diphtheria Vaccines')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#9A0680','#064663'])
            ->addData('Yes', [6, 9])
            ->addData('No', [7, 3])
            ->setXAxis(['Measles and Rubella', 'Tetanus and Diphtheria']);
    }
}
