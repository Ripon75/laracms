<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerPosition;
use Inertia\Inertia;

class BannerPositionController extends Controller
{

    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $bannerPositions = BannerPosition::paginate($defaultPaginate);

        return Inertia::render('BannerPosition/Index', [
            'bannerPositions' => $bannerPositions
        ]);
    }


    public function create()
    {
        return Inertia::render('BannerPosition/Create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'display_name' => 'required',
            'status'       => 'required'
        ]);

        $bannerPosition = new BannerPosition();

        $bannerPosition->name = $request->name;
        $bannerPosition->display_name = $request->display_name;
        $bannerPosition->description = $request->description;
        $bannerPosition->status = $request->status;
        $bannerPosition->save();
        return redirect()->route('positions.index');
    }


    public function show($id)
    {
        $bannerPosition = BannerPosition::findOrFail($id);

        return Inertia::render('BannerPosition/Show', [
            'bannerPosition' => $bannerPosition
        ]);
    }


    public function edit($id)
    {
        $bannerPosition = BannerPosition::findOrFail($id);

        return Inertia::render('BannerPosition/Edit', [
            'bannerPosition' => $bannerPosition
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'display_name' => 'required',
            'status'       => 'required'
        ]);

        $bannerPosition = BannerPosition::findOrFail($id);

        $bannerPosition->name = $request->name;
        $bannerPosition->display_name = $request->display_name;
        $bannerPosition->description = $request->description;
        $bannerPosition->status = $request->status;
        $bannerPosition->save();

        return redirect()->route('positions.index');
    }


    public function destroy($id)
    {
        return 'Destroy';
    }
}
