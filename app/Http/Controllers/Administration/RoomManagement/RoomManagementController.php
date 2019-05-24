<?php

namespace App\Http\Controllers\Administration\RoomManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomManagementController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    function index(){
        $floors = \App\CtrFloor::all();
        return view('administration.management.index',compact('floors'));
    }
}
