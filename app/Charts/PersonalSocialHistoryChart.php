<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PersonalSocialHistoryChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart2 = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->chart2->horizontalBarChart()
            ->setTitle('Personal Social History')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#D2001A','#FFDE00'])
            ->addData('Yes', [6, 9, 3])
            ->addData('No', [7, 3, 8])
            ->setXAxis(['Smoker', 'Alcohol Beverages Drinker', 'Sexually Active']);
    }
}
