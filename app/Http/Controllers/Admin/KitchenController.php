<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\KitchenRepository;
use App\Models\Kitchen; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class KitchenController extends Controller
{
    protected $kitchen;

    public function __construct(Kitchen $kitchen){
        $this->kitchen             = new KitchenRepository($kitchen); 
    }
    public function index(){
        return view("admin.manager.kitchen");
    }

    public function get(){
        $data = $this->kitchen->get_all();
        return $this->kitchen->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->kitchen->get_one($id);
        return $this->kitchen->send_response(200, $data, null);
    }
 
    public function store(Request $request){     
        $data = [  
            "name"          => $request->data_name,   
            "coefficient"          => $request->data_coefficient,  
            "valid"          => 1,  
        ]; 
        $data_create = $this->kitchen->create($data);  
        return $this->kitchen->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [  
            "name"          => $request->data_name,   
            "coefficient"          => $request->data_coefficient,  
        ];
 
        $data_update = $this->kitchen->update($data, $request->data_id);
        return $this->kitchen->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->kitchen->delete($id); 
        return $this->kitchen->send_response(200, "Delete successful", null);
    }
}
