<?php

namespace App\Charts;

use App\Models\FacilityStructure;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class SanitaryToiletChart
{
    protected $chart1;

    public function __construct(LarapexChart $chart1)
    {
        $this->chart1 = $chart1;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        $sanitaryToilet = FacilityStructure::select(DB::raw('COUNT("type_of_toilet_facility") AS type_of_toilet_facility_count'), 'type_of_toilet_facility')
        ->groupBy('type_of_toilet_facility')
        ->get();

        return $this->chart1->radialChart()
            ->setTitle('Type of Sanitary and Unsanitary Toilet')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData([
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'A. Pour/Flush type connected to septic tank')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'B. Pour/Flush connected to septic tank and sewerage system')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'C. Ventilated Pit (VIP) Latrine')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'D. Water-Sealed Toilet')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'E. Over Hung Lantrine')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'F. Open Pit Lantrine')->type_of_toilet_facility_count ?? 0,
                $sanitaryToilet->firstWhere('type_of_toilet_facility', 'G. Without Toilet')->type_of_toilet_facility_count ?? 0,
            ])
            ->setLabels([
                'Pour/flush type,connected to septic tank',
                'Pour/flush toilet connected to septic tank AND with sewage system',
                'Ventilated Pit (VIP) Latrine',
                'Water-Sealed Toilet',
                'Over Hung Latrine',
                'Open Pit Latrine',
                'Without Toilet'])
            ->setColors(['#D32F2F','#FCE22A', '#03A9F4','#16FF00', '#FF6E31','#1A0000','#FFFFD0']);
    }
}
