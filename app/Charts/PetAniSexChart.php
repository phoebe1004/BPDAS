<?php

namespace App\Charts;

use App\Models\PetsAnimals;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PetAniSexChart
{
    protected $chart6;

    public function __construct(LarapexChart $chart6)
    {
        $this->chart6 = $chart6;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart6->barChart()
            ->setTitle('Number of Pets and Animals Base on Sex')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#F90716','#06FF00'])
            ->addData('Male', [6, 9, 3])
            ->addData('Female', [7, 3, 8])
            ->setXAxis(['Carabao', 'Cow', 'goat']);
    }
}
