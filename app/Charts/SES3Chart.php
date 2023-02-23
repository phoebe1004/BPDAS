<?php

namespace App\Charts;

use App\Models\SocialEconomicStatus;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SES3Chart
{
    protected $chart9;

    public function __construct(LarapexChart $chart9)
    {
        $this->chart9 = $chart9;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $nonipyesCount = SocialEconomicStatus::get()->where('non_ip', 'yes')->count();
        $nonipnoCount = SocialEconomicStatus::get()->where('non_ip', 'no')->count();


        return $this->chart9->donutChart()
            ->setTitle('Non IP')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#3D1766', '#6F1AB6'])
            ->addData([$nonipyesCount, $nonipnoCount])
            ->setLabels(['Yes', 'No',$nonipyesCount, $nonipnoCount]);
    }
}
