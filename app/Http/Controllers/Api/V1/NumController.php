<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\NumResource;
use Illuminate\Http\Request;

class NumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number=mt_rand(0,1);
        return response()->json([
            'number' => $number
        ],200);
    }
}
