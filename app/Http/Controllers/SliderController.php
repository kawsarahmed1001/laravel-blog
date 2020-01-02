<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Helpers\UploadHelper;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::get();
        return view('admin.slider.index', compact(['slides']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if ( $request->file('photo')->isValid() ) {
                $file = $request->file('photo');
                $path = 'images/slider';
                $request['image_url'] = $path . '/' . UploadHelper::imageUpload($file, $path);
            }
            Slider::create($request->except(['_token', 'photo']));
            return redirect()->route('slider.index')->with('status', 'Slider Create Successful!');
        } catch (\Exception $ex) {
           dd($ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact(['slider']) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        try {
            if ($request->file('photo')->isValid()) {
                $file = $request->file('photo');
                $path = 'images/slider';
                unset($slider->image_url);
                $slider->image_url = $path . '/' . UploadHelper::imageUpload($file, $path);
            }
            if( isset($request->name) ){
                $slider->name = $request->name;
            }
            if (isset($request->description)) {
                $slider->description = $request->description;
            }
            if (isset($request->priority)) {
                $slider->priority = $request->priority;
            }
            
            $slider->save();

            return redirect()->route('slider.index')->with('status', 'Slider Updated Successful!');
        } catch (\Exception $ex) {
            dd($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();
            return redirect()->route('slider.index')->with('status', 'Slider Deleted Successful!');
        } catch (\Exception $ex) {
            dd($ex);
        }
    }
}
