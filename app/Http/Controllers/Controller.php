<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function uploadMedia($file)
    {
        $path = '\images';
        $fileName = uniqid() . '-' . $file->getClientOriginalName();
        $destination = public_path() . '/' . $path;
        $file->move($destination, $fileName);

        return $path . '/' . $fileName;
    }

    public function checkPermission($permission){

        if (! Auth::user()->can($permission))
            abort('419','عدم دسترسی');
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/info.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'filename.pdf', $headers);
    }
}
