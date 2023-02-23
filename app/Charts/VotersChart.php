<?php

namespace App\Charts;

use App\Models\RegisteredVoter;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class VotersChart
{
    protected $chart4;

    public function __construct(LarapexChart $chart4)
    {
        $this->chart4 = $chart4;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        // $residentVoters = RegisteredVoter::groupBy('reg_vot_indication')
        // ->selectRaw('count(*) as total, reg_vot_indication')
        // ->get();
        $voteyesCount = RegisteredVoter::get()->where('reg_vot_indication', 'yes')->count();
        $votenoCount = RegisteredVoter::get()->where('reg_vot_indication', 'no')->count();

        return $this->chart4->pieChart()
            ->setTitle('Cabantian Registered Voters')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([ $voteyesCount,  $votenoCount])
            ->setColors(['#16FF00', '#ff455f'])
            ->setLabels(['Voters', 'Non-Voters', $voteyesCount,  $votenoCount]);
    }
}
