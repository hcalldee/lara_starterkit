<?php

namespace App\Http\Controllers;
use App\Http\Controller\View;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;



class PegawaiController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $info['info']='halo';
        return view('layouts.contents.dashboard',$info) ;
    }
}
