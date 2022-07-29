<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\UserProfileRequest;
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
    public function profile(Request $request)
    {
        return view('web.profile.index')->with(
            'interests',
            Interest::all()->map(fn ($item) => ['label' => $item->name, 'value' => $item->id])->toArray()
        )->with(
            'brands',
            Brand::all()->map(fn ($item) => ['label' => $item->name, 'value' => $item->id])->toArray()
        )->with('user', $request->user());
    }

    public function store(UserProfileRequest $request)
    {
        $user = $request->user();
        $user->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'interests' => $request->interests,
            'brands_liked' => $request->brands,
        ]);

        return redirect()->route('web.home');
    }
}
