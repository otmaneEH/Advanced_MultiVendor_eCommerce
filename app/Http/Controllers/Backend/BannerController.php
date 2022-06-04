<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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
            'title' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'required',
            'condition' => 'nullable|in:banner,promo',
            'status' => 'nullable|in:active,inactive'
        ]);

        $data = $request->all();

        $data['slug'] = time() . '-' .$request->input('title');

        Banner::create($data);

        $notifiction = array(
            'message' => 'Banner Inserted SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notifiction);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
       $banner =  Banner::findOrFail($id);
       
       $request->validate([
            'title' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'required',
            'condition' => 'nullable|in:banner,promo',
            'status' => 'nullable|in:active,inactive'
        ]);

        $data = $request->all();

        $data['slug'] = time() . '-' .$request->input('title');

        $banner->update($data);

        $notifiction = array(
            'message' => 'Banner Updated SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notifiction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        $notifiction = array(
                'message' => 'banner deleted successfully',
                'alert-type' => 'error'
        );

        return redirect()->back()->with($notifiction);
    }
}
