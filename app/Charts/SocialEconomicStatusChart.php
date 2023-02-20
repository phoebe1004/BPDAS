<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SocialEconomicStatusChart
{
    protected $chart4;

    public function __construct(LarapexChart $chart4)
    {
        $this->chart4 = $chart4;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->chart4->horizontalBarChart()
            ->setTitle('Los Angeles vs Miami.')
            ->setSubtitle('Wins during season 2021.')
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('San Francisco', [6, 9, 3, 4])
            ->addData('Boston', [7, 3, 8, 2])
            ->setXAxis([
                'National Household Targeting System 4Ps',
                'National Household Targeting System Non 4Ps',
                'Non-National Household Targeting System',
                'Non Indigent People'
            ]);
    }
}
