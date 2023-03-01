<?php

namespace App\Charts;

use App\Models\PetsAnimals;
use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PetAniTypeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $petsanimals = PetsAnimals::groupBy('type')
        ->selectRaw('count(*) as total, type')
        ->get();

        return $this->chart->barChart()
        ->setTitle('Type of Pets and Animals')
        ->setSubtitle('Barangay Cabantian Davao City')
        ->setColors(['#0057ff'])
        ->addData('total', $petsanimals->map(fn($row) => $row->total)->toArray())
        ->setXAxis($petsanimals->count() ? $petsanimals->map(fn($row) => $row->type)->toArray() : [""]);

    }
}
