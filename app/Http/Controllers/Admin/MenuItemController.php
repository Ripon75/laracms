<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Menu;
use Inertia\Inertia;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defaultPagination = config('crud.paginate.size');

        $menuItems = MenuItem::with('menu')->paginate($defaultPagination);

        return Inertia::render('MenuItem/Index', [
            'menuitems' => $menuItems
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();

        return Inertia::render('MenuItem/Create', [
            'menus' => $menus
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
        Validator::make($request->all(), [
            'label'   => 'required | min:3',
            'menu_id' => 'required | numeric'
        ]);

        $menuItem = new MenuItem();

        $menuItem->label   = $request->label;
        $menuItem->menu_id = $request->menu_id;
        $menuItem->link    = $request->link;
        $menuItem->save();

        return redirect()->route('items.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menuItem = MenuItem::find($id);

        return Inertia::render('MenuItem/Show', [
            'menuItem' => $menuItem
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
        $menuItem = MenuItem::with('menu')->find($id);

        $menus = Menu::all();

        return Inertia::render('MenuItem/Edit', [

            'menuItem' => $menuItem,
            'menus'    => $menus

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
        Validator::make($request->all(), [
            'label'   => 'required | min:3',
            'menu_id' => 'required'
        ]);

        $menuItem = MenuItem::find($id);
        $menuItem->label   = $request->label;
        $menuItem->menu_id = $request->menu_id;
        $menuItem->link    = $request->link;
        $menuItem->save();

        return redirect()->route('items.index');
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
