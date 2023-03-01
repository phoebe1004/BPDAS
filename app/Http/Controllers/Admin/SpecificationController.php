<?php

namespace App\Http\Controllers\Admin;

use App\Charts\BackyardGardeningChart;
use App\Charts\WaterSourceChart;
use App\Charts\SanitaryToiletChart;
use App\Charts\WasteManagementChart;
use App\Http\Controllers\Controller;
use App\Models\BackyardGardening;
use App\Models\FacilityStructure;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        WaterSourceChart $chart,
        SanitaryToiletChart $chart1,
        WasteManagementChart $chart2,
        BackyardGardeningChart $chart3
    )
    {
        $waterSource = FacilityStructure::selectRaw('COUNT(type_of_water_source) as total, type_of_water_source')->groupBy('type_of_water_source')->orderByDesc('total')->first();
        $sanitaryToilet = FacilityStructure::selectRaw('COUNT(type_of_toilet_facility) as total, type_of_toilet_facility')->groupBy('type_of_toilet_facility')->orderByDesc('total')->first();
        $wasteManagement = FacilityStructure::selectRaw('COUNT(type_of_waste_management) as total, type_of_waste_management')->groupBy('type_of_waste_management')->orderByDesc('total')->first();
        $backyardGardening = BackyardGardening::selectRaw('COUNT(gardening_indication) as total, gardening_indication')->groupBy('gardening_indication')->orderByDesc('total')->first();

        return view('admin.specification.index',[
            'chart' => $chart->build(),
            'chart1' => $chart1->build(),
            'chart2' => $chart2->build(),
            'chart3' => $chart3->build(),
            'waterSource' => $waterSource->total ?? 0,
            'waterSourceText' => $waterSource?->type_of_water_source,
            'sanitaryToilet' => $sanitaryToilet->total ?? 0,
            'sanitaryToiletText' => $sanitaryToilet?->type_of_toilet_facility,
            'wasteManagement' => $wasteManagement->total ?? 0,
            'wasteManagementText' => $wasteManagement?->type_of_waste_management,
            'backyardGardening' => $backyardGardening->total ?? 0,
            'backyardGardeningText' => $backyardGardening?->gardening_indication === 'no' ? 'Has Backyard Gardening' : 'Has No Backyard Gardening',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
