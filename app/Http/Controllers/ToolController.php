<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolController extends Controller
{

    public function getIndex()
    {  
    	$tools = Tool::all();
        return view('panacea.tools')->with('tools',$tools);


    }

    }
