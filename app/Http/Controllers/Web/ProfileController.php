<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\UserProfileRequest;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\Brand;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();
        $user->loadCount('answers');
        $answers = $user->answers()
            ->latest()
            ->paginate(12);

        return view('web.profile.index')
            ->with('answers', $answers)
            ->with('user', $user);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        return view('web.profile.edit')->with(
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

        return redirect()->route('web.profile.index');
    }
}
