<?php

namespace App\Charts;

use App\Models\Resident;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PurokChart
{
    protected $chart5;

    public function __construct(LarapexChart $chart5)
    {
        $this->chart5 = $chart5;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {

        // $maleCount = Resident::get()->where('sex', 'Male')->count();
        // $femaleCount = Resident::get()->where('sex', 'Female')->count();

        $residentPurok = Resident::groupBy('purok')
        ->selectRaw('count(*) as total, purok')
        ->get();

        return $this->chart5->horizontalBarChart()
            ->setTitle('Residents Population By Purok')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->setColors(['#379237'])
            ->addData('total',  $residentPurok->map(fn($row) => $row->total)->toArray())
            ->setXAxis($residentPurok->map(fn($row) => $row->purok)->toArray());
            // ->addData('Bacahoa Village', [2])
            // ->addData('Camelon Compound', [3])
            // ->addData('CDE Phase 4', [4])
            // ->addData('CDE Phase 3', [5])
            // ->addData('CDE Phase 2', [6])
            // ->addData('CDE Phase 1', [7])
            // ->addData('Cecilia 1&2', [8])
            // ->addData('Celerina Heights', [9])
            // ->addData('Country Homes (Zone 11)', [10])
            // ->addData('Country Homes B1-B19', [11])
            // ->addData('CHS #15 (B55-B47)', [12])
            // ->addData('CHS Purok (14 B36-B46)', [13])
            // ->addData('Country Homes Sagingan', [14])
            // ->addData('CHS #16 B56-62', [15])
            // ->addData('Country Ville Village', [16])
            // ->addData('Chula Vista', [17])
            // ->addData('DAchievers', [18])
            // ->addData('Dacudao/Binoling (Amsay)', [19])
            // ->addData('Deca Homes Phase 1-A (B14-20)', [20])
            // ->addData('Deca Homes Phase 2-A (B21-32)', [21])
            // ->addData('Deca Homes Phase 2-B(B2 33-41)', [22])
            // ->addData('Deca Homes Phase 1-B (B1-13)', [23])
            // ->addData('Dela Peña Village', [24])
            // ->addData('Diho Phase 2', [25])
            // ->addData('Diho Phase 1', [26])
            // ->addData('Dragon Compound Purok 5', [27])
            // ->addData('Emilia Homes (Victors)', [28])
            // ->addData('Emilia Homes Phase 1A', [29])
            // ->addData('Emilia Homes Beside Emily', [30])
            // ->addData('Emilia Homes Phase 1B', [31])
            // ->addData('Emilia Homes Phase 2B', [32])
            // ->addData('Emilia Homes Phase 2A', [33])
            // ->addData('Emilia Homes Phase 3B<', [34])
            // ->addData('Emilia Homes Phase 3A', [35])
            // ->addData('Green Orchard Village', [36])
            // ->addData('Greenland Phase 1', [37])
            // ->addData('Greenland Phase 2', [38])
            // ->addData('Holy Trinity Village', [39])
            // ->addData('Laverna Hills Phase 3', [40])
            // ->addData('Laverna Hills Phase 1', [41])
            // ->addData('Pag-ibig Subdivision', [42])
            // ->addData('Pareñas Compound', [43])
            // ->addData('Precilla 1/2', [44])
            // ->addData('Pretige', [45])
            // ->addData('Purok 32 Mountain View Village', [46])
            // ->addData('Purok 33 KM 11, San Roque', [47])
            // ->addData('Purok 34 Amakan', [48])
            // ->addData('Purok 36 Arendain Compound', [49])
            // ->addData('Purok 36 Forestal', [50])
            // ->addData('Purok 37 Forestal', [51])
            // ->addData('Purok 39 Daitic Compound', [52])
            // ->addData('Ramonena 2', [53])
            // ->addData('Remedios Eights', [54])
            // ->addData('Sialza Compound', [55])
            // ->addData('Sta. Teresita Purok 1', [56])
            // ->addData('Suraya Cab Elem. School', [57])
            // ->addData('Suraya Homes Phase 1', [58])
            // ->addData('Suraya Homes Phase 2A', [59])
            // ->addData('Suraya Homes Phase 2B', [60])
            // ->addData('The Harmony Subdivision', [61])
            // ->addData('Villa Park Subdivision', [62])


    }
}
