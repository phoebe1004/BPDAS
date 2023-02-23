<?php

namespace App\Charts;

use App\Models\SocialEconomicStatus;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SES1Chart
{
    protected $chart7;

    public function __construct(LarapexChart $chart7)
    {
        $this->chart7 = $chart7;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $nhtsnon4psyesCount = SocialEconomicStatus::get()->where('nhts_non_4ps', 'yes')->count();
        $nhtsnon4psnoCount = SocialEconomicStatus::get()->where('nhts_non_4ps', 'no')->count();


        return $this->chart7->donutChart()
            ->setTitle('NHTS Non 4ps')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#F94A29','#D61355'])
            ->addData([$nhtsnon4psyesCount, $nhtsnon4psnoCount])
            ->setLabels(['Yes', 'No', $nhtsnon4psyesCount, $nhtsnon4psnoCount]);
    }
}
