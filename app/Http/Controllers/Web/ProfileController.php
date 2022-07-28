<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\Brand;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('web.profile')->with(
            'interests',
            Interest::all()->map(fn($item) => ['label' => $item->name, 'value' => $item->id])->toArray()
        )->with(
            'brands',
            Brand::all()->map(fn($item) => ['label' => $item->name, 'value' => $item->id])->toArray()
        );
    }
}
