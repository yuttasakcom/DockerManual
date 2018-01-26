<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('files.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file')->store('uploads', 'public');
        $image = Image::make(public_path($file));
        $image->resize(null, 50, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('img/bar.png'));
        echo 'ok';
    }
}
