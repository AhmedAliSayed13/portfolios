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
    public function char(){
        return view($this->path.'char');
    }
    public function forms(){
        return view($this->path.'forms');
    }
    public function jumeirah(){
        return view($this->path.'jumeirah');
    }
    public function market(){
        return view($this->path.'market');
    }
    public function moe(){
        return view($this->path.'moe');
    }
    public function pk(){
        return view($this->path.'pk');
    }
    public function lms(){
        return view($this->path.'lms');
    }
    public function ozone(){
        return view($this->path.'ozone');
    }
    public function blue(){
        return view($this->path.'blue');
    }
    public function comax(){
        return view($this->path.'comax');
    }
    public function fourA(){
        return view($this->path.'fourA');
    }
    public function smart(){
        return view($this->path.'smart');
    }
    public function housing(){
        return view($this->path.'housing');
    }
    public function cyper(){
        return view($this->path.'cyper');
    }
    public function kpi(){
        return view($this->path.'kpi');
    }
    public function school(){
        return view($this->path.'school');
    }

}
