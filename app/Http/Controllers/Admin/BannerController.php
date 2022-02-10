<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\BannerPosition;
use Inertia\Inertia;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');

        $banners = Banner::with('position')->paginate($defaultPaginate);

        return Inertia::render('Banner/Index', [
            'banners' => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bannerPositions = BannerPosition::all();

        return Inertia::render('Banner/Create', [

            'bannerPositions' => $bannerPositions

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'              => 'required|min:3|max:255',
            'caption'            => 'required',
            'banner_position_id' => 'required | numeric',
            'status'             => 'required'
        ]);


        $banner = new Banner();

        $banner->title = $request->title;
        $banner->caption = $request->caption;
        $banner->banner_position_id = $request->banner_position_id;
        $banner->status = $request->status;
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::findOrFail($id);

        return Inertia::render('Banner/Show', [

            'banner' => $banner

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::with('position')->find($id);

        $bannerPositions = BannerPosition::all();

        return Inertia::render('Banner/Edit', [

        'banner'          => $banner,
        'bannerPositions' => $bannerPositions

        ]);
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
        $request->validate([
            'title'              => 'required|min:3|max:255',
            'caption'            => 'required',
            'banner_position_id' => 'required | numeric',
            'status'             => 'required'
        ]);

        $banner = Banner::findOrFail($id);

        $banner->title              = $request->title;
        $banner->caption            = $request->caption;
        $banner->banner_position_id = $request->banner_position_id;
        $banner->status             = $request->status;
        $banner->save();

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Destroy';
    }
}
