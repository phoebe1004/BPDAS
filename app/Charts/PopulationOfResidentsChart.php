<?php

namespace App\Charts;

use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PopulationOfResidentsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $residentClassification = Resident::groupBy('classification_by_age')
        ->selectRaw('count(*) as total, classification_by_age')
        ->get();

        return $this->chart->barChart()
        ->setTitle('Population of Residents By Age & Health Risk Classification')
        ->setSubtitle('Barangay Cabantian Davao City')
        ->setColors(['#D32F2F'])
        ->addData('total', $residentClassification->map(fn($row) => $row->total)->toArray())
        ->setXAxis($residentClassification->map(fn($row) => $row->classification_by_age)->toArray());

        // 'Newborn',
        // 'Senior citizens',
        // 'Adolescent',
        // 'Adult (20-59 yrs old)',
        // '15-49 y.o., not pregnant & non-PP',
        // 'Pregnant',
        // 'Adolescent Pregnant',
        // 'Post Partum',
        // 'Infant (29 days - 11 month old)',
        // 'Under 5 (0-59 months)',
        // 'PWD'
    }
}
