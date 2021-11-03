<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('setting.app_setting', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $setting = Setting::findOrFail($id);
    
        $validator = Validator::make($request->all(),[
            'fav_icon' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:512',
            'logo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        $input = $request->all();

        if($request->hasFile('fav_icon')) {
            $file=$request->file('fav_icon');
            $input['fav_icon']=ImageUpload::image_upload($file);
            ImageUpload::image_delete($setting['fav_icon']);
        }

        if($request->hasFile('logo')) {
            $file=$request->file('logo');
            $input['logo']=ImageUpload::image_upload($file);
            ImageUpload::image_delete($setting['logo']);
        }

        try{
            $setting->update($input);
            return redirect()->back()->with('success', 'Setting successfully updated.');
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
