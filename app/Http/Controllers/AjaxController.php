<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function markResidentDone(Request $request)
    {
        $resident_id = $request->id;
        $resident = Resident::find($resident_id);
        $resident->completed = 1;
        $resident->save();

        return response()->json([
            'success' => true,
        ]);
    }
}
