<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SanitaryToiletChart
{
    protected $chart1;

    public function __construct(LarapexChart $chart1)
    {
        $this->chart1 = $chart1;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        return $this->chart1->radialChart()
            ->setTitle('Type of Sanitary and Unsanitary Toilet')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([75, 60, 50, 40, 30, 20, 10])
            ->setLabels(['A.Pour/flush type,connected to septic tank',
            'B.Pour/flush toilet connected to septic tank AND with sewage system',
            'C.Ventilated Pit (VIP) Latrine',
            'D.Water-Sealed Toilet',
            'E.Over Hung Latrine',
            'F.Open Pit Latrine',
            'G.Without Toilet'])
            ->setColors(['#D32F2F','#FCE22A', '#03A9F4','#16FF00', '#FF6E31','#1A0000','#FFFFD0']);
    }
}
