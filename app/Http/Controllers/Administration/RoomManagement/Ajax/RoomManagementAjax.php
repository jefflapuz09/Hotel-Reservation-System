<?php

namespace App\Http\Controllers\Administration\RoomManagement\Ajax;

use Illuminate\Support\Facades\Input;
use Request;
use App\Http\Controllers\Controller;

class RoomManagementAjax extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    function get_floors(){
        if(Request::ajax()){
            $floor = Input::get('floor');
            
            $exists = \App\CtrFloor::where('floor',$floor)->get();
            if($exists->isEmpty()){
                $record = new \App\CtrFloor;
                $record->floor = $floor;
                $record->save();
                
                $floors = \App\CtrFloor::get();
                return view('administration.management.ajax.get_floors',compact('floors'));
            }else{
                abort(404);
            }
            
        }
    }
}
