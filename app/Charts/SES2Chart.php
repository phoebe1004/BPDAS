<?php

namespace App\Charts;

use App\Models\SocialEconomicStatus;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SES2Chart
{
    protected $chart8;

    public function __construct(LarapexChart $chart8)
    {
        $this->chart8 = $chart8;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $nonnhtsyesCount = SocialEconomicStatus::get()->where('non_nhts', 'yes')->count();
        $nonnhtsnoCount = SocialEconomicStatus::get()->where('non_nhts', 'no')->count();


        return $this->chart8->donutChart()
            ->setTitle('Non NHTS')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#060047','#B3005E'])
            ->addData([$nonnhtsyesCount, $nonnhtsnoCount])
            ->setLabels(['Yes', 'No',$nonnhtsyesCount, $nonnhtsnoCount]);
    }
}
