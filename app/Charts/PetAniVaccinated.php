<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PetAniVaccinated
{
    protected $charts;

    public function __construct(LarapexChart $charts)
    {
        $this->charts = $charts;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->charts->barChart()
            ->setTitle('Number of Pets and Animals Vaccinated')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F90716','#06FF00'])
            ->addData('Yes', [6, 9, 3])
            ->addData('No', [7, 3, 8])
            ->addData('Some', [7, 3, 8])
            ->addData('Prefer not to say', [7, 3, 8])
            ->setXAxis(['Carabao', 'Cow', 'goat']);
    }
}
