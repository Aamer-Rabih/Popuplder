<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use App\Models\Page;
use App\Models\PopupType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $popups = Popup::latest()->get();

        return view('dashboard.popups.index', compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = PopupType::latest()->get();
        $pages = Page::latest()->get();

        return view('dashboard.popups.create', compact('pages', 'types'));
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
        //
        $validator = Validator::make($request->all(), [
            'name' => 'bail|string|required',
            'type' => 'bail|numeric|required',
            'location' => 'bail|required|string',
            'height' => 'bail|required|numeric',
            'width' => 'bail|required|numeric',
            'color' => 'bail|required|string',
            'pages' => 'bail|nullable',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $popup = Popup::create([
            'name' => $request->name,
            'type_id' => $request->type,
            'location' => $request->location,
            'height' => $request->height,
            'width' => $request->width,
            'color' => $request->color,
        ]);

        if ($request->pages !== null && $request->pages !=='none' && $request->pages !== '') {
            $page= Page::find($request->pages);
            $page->popup_id= $popup->id;
            $page->save();
        }
        

        return redirect()->route('popups.index');
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
        $popup = Popup::find($id);
        $popup->delete();
        
        return redirect()->route('popups.index');
    }

    /**
     * Popup analytics.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function analytics()
    {
        //
        $popups = Popup::latest()->get();

        return view('dashboard.popups.analytics', compact('popups'));
    }
}
