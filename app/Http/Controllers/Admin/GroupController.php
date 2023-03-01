<?php

namespace App\Http\Controllers\Admin;

use App\Charts\CommunityGroupChart;
use App\Charts\CommunityIndication;
use App\Http\Controllers\Controller;
use App\Models\CommunityGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CommunityGroupChart $chart3,
                         CommunityIndication $chart8)
    {
        $groupType = CommunityGroup::select(DB::raw('COUNT("com_grp_type") AS total'), 'com_grp_type')
        ->where('com_grp_type', '!=', 'None')
        ->groupBy('com_grp_type')
        ->orderByDesc('total')
        ->first();

        return view('admin.group.index', [
            'chart3' => $chart3->build(),
            'chart8' => $chart8->build(),
            'groupType' => $groupType->total ?? 0,
            'groupTypeText' => $groupType->com_grp_type ?? '',
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
