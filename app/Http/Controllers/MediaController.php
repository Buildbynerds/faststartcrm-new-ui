<?php

namespace App\Http\Controllers;

use App\Media;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return view('media.index',compact('medias'));
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
        $validator=Validator::make($request->all(),[
            'file'=> 'mimes:jpeg,jpg,png,ico,JPG,pdf|max:2048',
        ]);
        $input = $request->all();
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            $input['file']=$this->image_upload($file);
        }
        try{
             $data = Media::create($input);
            //  return response()->json(['success'=>'Data submitted successfully']);
             return response()->json([
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/uploads/'.$input['file'].'" class="img-thumbnail" width="300" />',
                'uploaded_image_url' => '<p>'.url('uploads').'/'.$input['file'].'<p/>',
                'class_name'  => 'alert-success'
               ]);
        }catch(Exception $e){
            return response()->json([
                'message'   => $e->getMessage(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
               ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $media = Media::findOrFail($id);
            $media->delete();
            $notification = array(
                'message' => 'Data has been deleted!',
                'alert_type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    
        public function image_upload($file)
        {
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            $file->move('uploads/',$fileName);
            return $fileName;
        }
}
