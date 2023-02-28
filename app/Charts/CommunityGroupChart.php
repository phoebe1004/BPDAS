<?php

namespace App\Charts;

use App\Models\CommunityGroup;
use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class CommunityGroupChart
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $noneCount = CommunityGroup::where('com_grp_type', 'none')->get()->count();
        $womenCount = CommunityGroup::where('com_grp_type', 'women')->get()->count();
        $seniorcitizenCount = CommunityGroup::where('com_grp_type', 'senior citizens')->get()->count();
        $youthCount = CommunityGroup::where('com_grp_type', 'youth')->get()->count();
        $pwdCount = CommunityGroup::where('com_grp_type', 'pwds')->get()->count();

        return $this->chart3->pieChart()
            ->setTitle('Cabantian Community Group Count')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([$noneCount, $womenCount, $seniorcitizenCount, $youthCount, $pwdCount])
            ->setColors(['#A31ACB', '#F94A29', '#CD5888', '#400E32', '#F2CD5C', ])
            ->setLabels(['none','women','senior citizens','youth','pwds']);
    }
}
