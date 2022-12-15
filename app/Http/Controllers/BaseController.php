<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function uploadFile($uploadedFile, $uploadPath)
    {
        $FileName = $uploadedFile->getClientOriginalName();
        $fileNameToStore = uniqid() . '_' . time() . '_' . $FileName;

        $fileUploaded = $uploadedFile->move(public_path($uploadPath), $fileNameToStore);

        if ($fileUploaded)
        {
            return $fileNameToStore;
        }
        return null;
    }
}
