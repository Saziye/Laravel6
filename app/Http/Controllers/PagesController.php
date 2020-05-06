<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    public function home(Example $example)
    {
        ddd($example);
    }

    public function homef(Filesystem $file)
    {   
        //return FacadesRequest::input('name');   //return request('name');
        //return $file->get(public_path('index.php'));  //return File::get(public_path('index.php')); 
        //return File::get(public_path('index.php'));
        //return View::make('welcome');

        Cache::remember('foo', 60, function () {
            return 'foobar'; 
        });
        return Cache::get('foo');
    }
}
