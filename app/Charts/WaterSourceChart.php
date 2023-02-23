<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class WaterSourceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->chart->horizontalBarChart()
            ->setTitle('Type of Water Source')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#03A9F4'])
            ->addData('Water Source', [6, 9, 3, 4])
            ->setXAxis(['Level I-(Point Source)', 'Level II-(Communal Faucet) ', 'Level III-(Individual Connection)', 'Others-(For Doubtful sources,open dug well,etc.)']);
    }
}
