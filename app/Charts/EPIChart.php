<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class EPIChart
{
    protected $chart8;

    public function __construct(LarapexChart $chart8)
    {
        $this->chart8 = $chart8;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart8->pieChart()
            ->setTitle('Expanded Program on Immunization')
            ->setSubtitle('For (0-5 years old)')
            ->setColors(['#379237','#FCE700'])
            ->addData([40, 50])
            ->setLabels(['Yes', 'No']);
    }
}
