<?php

namespace App\Charts;

use App\Models\PetsAnimals;
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
        $petsanimals = PetsAnimals::groupBy('vaccinated')
        ->selectRaw('count(vaccinated) as total, vaccinated')
        ->get();

        return $this->charts->barChart()
            ->setTitle('Number of Pets and Animals Vaccinated')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F90716','#06FF00'])
            ->addData('Yes', [$petsanimals->firstWhere('vaccinated', 'yes')?->total ?? 0])
            ->addData('No', [$petsanimals->firstWhere('vaccinated', 'no')?->total ?? 0])
            ->addData('Some', [$petsanimals->firstWhere('vaccinated', 'some')?->total ?? 0])
            ->addData('Prefer not to say', [$petsanimals->firstWhere('vaccinated', 'prefer not to say')?->total ?? 0])
            ->setXAxis(['']);
    }
}
