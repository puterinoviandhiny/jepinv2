<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PariwisataCategory;

class CategoryApiController extends Controller
{
    public function filterByMaster($master_id)
    {
        $categories = PariwisataCategory::where('master_id', $master_id)->get();
        return response()->json($categories);
    }
}
