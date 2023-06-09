<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\KitchenRepository;
use App\Models\Kitchen; 

use App\Repositories\Manager\OrderRepository;
use App\Models\OrderDetail;  
use App\Models\OrderTime; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class KitchenController extends Controller
{
    protected $kitchen;
    protected $orderDetail;

    public function __construct(Kitchen $kitchen, OrderDetail $orderDetail){
        $this->kitchen             = new KitchenRepository($kitchen); 
        $this->orderDetail             = new OrderRepository($orderDetail); 
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
    public function get_order($id){
        $data_kitchen = $this->kitchen->get_one($id); 
        $he_so = $data_kitchen->coefficient;
        $don_hang = $this->orderDetail->get_order_sub($he_so);

        $this->orderDetail->update(["status" => 0], $don_hang->id);
        $this->kitchen->update(["status" => 0], $id);
        
        return $this->kitchen->send_response(200, $don_hang, null);
    }
    public function post_order($id){

        $this->kitchen->update(["status" => 1], $id);
        
        return $this->kitchen->send_response(200, null, null);
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
