<?php

namespace App\Charts;

use App\Models\FacilityStructure;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class WasteManagementChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart2 = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $wasteManagement = FacilityStructure::select(DB::raw('COUNT("type_of_waste_management") AS type_of_waste_management_count'), 'type_of_waste_management')
        ->groupBy('type_of_waste_management')
        ->get();

        return $this->chart2->lineChart()
            ->setTitle('Type of Waste Management')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData('Waste Management', [
                $wasteManagement->firstWhere('type_of_waste_management', 'A. Waste Segration')->type_of_waste_management_count ?? 0,
                $wasteManagement->firstWhere('type_of_waste_management', 'B. Backyard Composting')->type_of_waste_management_count ?? 0,
                $wasteManagement->firstWhere('type_of_waste_management', 'C. Recycling/ReUse')->type_of_waste_management_count ?? 0,
                $wasteManagement->firstWhere('type_of_waste_management', 'D. Collected by City/Municipality Collection and Disposal System')->type_of_waste_management_count ?? 0,
                $wasteManagement->firstWhere('type_of_waste_management', 'E. Others (Burning / Burying)')->type_of_waste_management_count ?? 0,
            ])
            ->setXAxis([
                'A.Waste Segragation',
                'B.Backyard Composting',
                'C.Recycling/Reused',
                'D.Municipal Collection',
                'E.Others'
            ]);
    }
}
