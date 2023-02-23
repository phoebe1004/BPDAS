<?php

namespace App\Charts;

use App\Models\Resident;
use App\Models\SocialEconomicStatus;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SESChart
{
    protected $chart6;

    public function __construct(LarapexChart $chart6)
    {
        $this->chart6 = $chart6;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $nhts4psyesCount = SocialEconomicStatus::get()->where('nhts_4ps', 'yes')->count();
        $nhts4psnoCount = SocialEconomicStatus::get()->where('nhts_4ps', 'no')->count();


        return $this->chart6->donutChart()
            ->setTitle('NHTS 4ps')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#3A1078','#4E31AA'])
            ->addData([$nhts4psyesCount, $nhts4psnoCount])
            ->setLabels(['Yes', 'No',$nhts4psyesCount, $nhts4psnoCount]);
    }
}
