<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $path='projects.';
    public function Travel2Drive(){
        return view($this->path.'Travel2Drive');
    }
    public function almaali(){
        return view($this->path.'almaali');
    }
    public function apptriner(){
        return view($this->path.'apptriner');
    }
    
}
