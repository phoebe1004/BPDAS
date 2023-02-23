<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class AttainmentChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Educational Attainment by Purok')
            ->setSubtitle('Barangay Cabantian Davao City')
            ->addData('None', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62])
            ->addData('Elementary Level', [62,61,60,59,58,57,56,55,54,53,52,51,50,49,48,47,46,45,44,43,42,41,40,39,38,37,36,35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,18,14,13,12,11,10,9,8,7,6,5,4,3,2,1])
            ->addData('Elementary Graduate', [63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124])
            ->addData('Junior High School Level', [124,123,122,121,120,119,118,117,116,115,114,113,112,111,110,109,108,107,106,105,104,103,102,101,100,99,98,97,96,95,94,93,92,91,90,89,87,86,85,84,83,82,81,80,79,78,77,76,75,74,73,72,71,70,69,68,67,66,65,64,63])
            ->addData('Junior High School Graduate', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62])
            ->addData('Senior High School Level', [62,61,60,59,58,57,56,55,54,53,52,51,50,49,48,47,46,45,44,43,42,41,40,39,38,37,36,35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,18,14,13,12,11,10,9,8,7,6,5,4,3,2,1])
            ->addData('Senior High School Graduate', [63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124])
            ->addData('Vocational', [124,123,122,121,120,119,118,117,116,115,114,113,112,111,110,109,108,107,106,105,104,103,102,101,100,99,98,97,96,95,94,93,92,91,90,89,87,86,85,84,83,82,81,80,79,78,77,76,75,74,73,72,71,70,69,68,67,66,65,64,63])
            ->addData('College Level', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62])
            ->addData('College Graduate', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62])
            ->addData('PostGraduate', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62])
            ->setXAxis(
                [
                    'Antonio Village',
                    'Bacahoa Village',
                    'Camelon Compound',
                    'CDE Phase 4',
                    'CDE Phase 3',
                    'CDE Phase 2',
                    'CDE Phase 1',
                    'Cecilia 1&2',
                    'Celerina Heights',
                    'Country Homes (Zone 11)',
                    'Country Homes B1-B19',
                    'CHS #15 (B55-B47)',
                    'CHS Purok (14 B36-B46)',
                    'Country Homes Sagingan',
                    'CHS #16 B56-62',
                    'Country Ville Village',
                    'Chula Vista',
                    'D Achievers',
                    'Dacudao/Binoling (Amsay)',
                    'Deca Homes Phase 1-A (B14-20)',
                    'Deca Homes Phase 2-A (B21-32)',
                    'Deca Homes Phase 2-B(B2 33-41)',
                    'Deca Homes Phase 1-B (B1-13)',
                    'Dela Peña Village',
                    'Diho Phase 2',
                    'Diho Phase 1',
                    'Dragon Compound Purok 5',
                    'Emilia Homes (Victors)',
                    'Emilia Homes Phase 1A',
                    'Emilia Homes Beside Emily',
                    'Emilia Homes Phase 1B',
                    'Emilia Homes Phase 2B',
                    'Emilia Homes Phase 2A',
                    'Emilia Homes Phase 3B',
                    'Emilia Homes Phase 3A',
                    'Green Orchard Village',
                    'Greenland Phase 1',
                    'Greenland Phase 2',
                    'Holy Trinity Village',
                    'Laverna Hills Phase 3',
                    'Laverna Hills Phase 1',
                    'Pag-ibig Subdivision',
                    'Pareñas Compound',
                    'Precilla 1/2',
                    'Pretige',
                    'Purok 32 Mountain View Village',
                    'Purok 33 KM 11, San Roque',
                    'Purok 34 Amakan',
                    'Purok 36 Arendain Compound',
                    'Purok 36 Forestal',
                    'Purok 37 Forestal',
                    'Purok 39 Daitic Compound',
                    'Ramonena 2',
                    'Remedios Eights',
                    'Sialza Compound',
                    'Sta. Teresita Purok 1',
                    'Suraya Cab Elem. School',
                    'Suraya Homes Phase 1',
                    'Suraya Homes Phase 2A',
                    'Suraya Homes Phase 2B',
                    'The Harmony Subdivision',
                    'Villa Park Subdivision'
                ]
            );
    }
}
