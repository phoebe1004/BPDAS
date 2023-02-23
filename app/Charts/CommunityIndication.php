<?php

namespace App\Charts;

use App\Models\CommunityGroup;
use App\Models\SocialEconomicStatus;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CommunityIndication
{
    protected $chart8;

    public function __construct(LarapexChart $chart8)
    {
        $this->chart8 = $chart8;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $grpindyesCount = CommunityGroup::get()->where('com_grp_indication', 'yes')->count();
        $grpindnoCount = CommunityGroup::get()->where('com_grp_indication', 'no')->count();


        return $this->chart8->donutChart()
            ->setTitle('Community Group Indication')
            ->setSubtitle('Barangay Cabantian')
            ->setColors(['#060047','#B3005E'])
            ->addData([$grpindyesCount, $grpindnoCount])
            ->setLabels(['Yes', 'No',$grpindyesCount, $grpindnoCount]);
    }
}
