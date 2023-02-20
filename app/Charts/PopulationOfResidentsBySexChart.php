<?php

namespace App\Charts;

use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PopulationOfResidentsBySexChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart2 = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {

        $residentCivilstatus = Resident::groupBy('civil_status')
        ->selectRaw('count(*) as total, civil_status')
        ->get();

        return $this->chart2->lineChart()
        ->setTitle('Cabantian Civil Status')
        ->setSubtitle('Barangay Cabantian Davao City')
        ->addData('total', $residentCivilstatus->map(fn($row) => $row->total)->toArray())
        ->setXAxis($residentCivilstatus->map(fn($row) => $row->civil_status)->toArray());

        // return $this->chart2->lineChart()
        //     ->setTitle('Sales during 2021.')
        //     ->setSubtitle('Physical sales vs Digital sales.')
        //     ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
        //     ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
        //     ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
