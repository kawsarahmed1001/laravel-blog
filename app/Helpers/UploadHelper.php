<?php 
namespace App\Helpers; 

/**
 * Helper class provide some handy functionality
 */
class UploadHelper
{
	
	public static function imageUpload($file, $path)
	{
		$customName = time() . rand(10000, 99999);
		$imageName = $customName . "." . $file->getClientOriginalExtension();
        if ($file->isValid()) {
            $file->move($path, $imageName);
            return $imageName;
        }
        return false;
	}
	
}