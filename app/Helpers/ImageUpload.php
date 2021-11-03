<?php
/**
 * Created by Ariful Islam.
 * Organization : Pigeon Soft
 * Date: 8/13/2021
 * Time: 4:48 PM
 */


namespace App\Helpers;


class ImageUpload
{
    public static function image_upload($file)
    {
        $fileType=$file->getClientOriginalExtension();
        $fileName=rand(1000,9999).date('dmyhis').".".$fileType;
        $file->move('uploads',$fileName);
        return $fileName;
    }

    public static function image_delete($file_name)
    {
        $file_path='uploads'.'/'.$file_name;
        if($file_name!=null and file_exists($file_path)){
            unlink($file_path);
        }

        return true;
    }

}
