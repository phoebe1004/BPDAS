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
        // $residentSex = Resident::groupBy('sex')
        // ->selectRaw('count(*) as total, sex')
        // ->get();

        $noneCount = CommunityGroup::get()->where('com_grp_type', 'none')->count();
        $womenCount = CommunityGroup::get()->where('com_grp_type', 'women')->count();
        $seniorcitizenCount = CommunityGroup::get()->where('com_grp_type', 'senior citizens')->count();
        $youthCount = CommunityGroup::get()->where('com_grp_type', 'youth')->count();
        $pwdCount = CommunityGroup::get()->where('com_grp_type', 'pwds')->count();

        return $this->chart3->pieChart()
            ->setTitle('Cabantian Community Group Count')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([$noneCount, $womenCount, $seniorcitizenCount, $youthCount, $pwdCount])
            ->setColors(['#A31ACB', '#F94A29', '#CD5888', '#400E32', '#F2CD5C', ])
            ->setLabels(['none','women','senior citizens','youth','pwds', $noneCount,$womenCount,$seniorcitizenCount,$youthCount,$pwdCount]);
    }
}
