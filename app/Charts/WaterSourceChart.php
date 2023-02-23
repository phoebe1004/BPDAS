<?php

namespace App\Charts;

use App\Models\FacilityStructure;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class WaterSourceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $waterSource = FacilityStructure::select(DB::raw('COUNT("type_of_water_source") AS type_of_water_source_count'), 'type_of_water_source')
        ->groupBy('type_of_water_source')
        ->get();

        return $this->chart->horizontalBarChart()
            ->setTitle('Type of Water Source')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#03A9F4'])
            ->addData('Water Source', [
                $waterSource->firstWhere('type_of_water_source', 'Level I (Point Source)')->type_of_water_source_count ?? 0,
                $waterSource->firstWhere('type_of_water_source', 'Level II (Communal Faucet)')->type_of_water_source_count ?? 0,
                $waterSource->firstWhere('type_of_water_source', 'Level III (Individual Connection)')->type_of_water_source_count ?? 0,
                $waterSource->firstWhere('type_of_water_source', 'Others (For Doubtful Sources,open dug, well, etc.)')->type_of_water_source_count ?? 0,
            ])
            ->setXAxis(['Level I-(Point Source)', 'Level II-(Communal Faucet) ', 'Level III-(Individual Connection)', 'Others-(For Doubtful sources,open dug well,etc.)']);
    }
}
