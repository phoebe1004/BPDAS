<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class WasteManagementChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart2 = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart2->lineChart()
            ->setTitle('Type of Waste Management')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData('Waste Management', [40, 93, 35, 42, 18])
            ->setXAxis(['A.Waste Segragation',
             'B.Backyard Composting',
             'C.Recycling/Reused',
             'D.Municipal Collection',
             'E.Others']);
    }
}
