<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Manager\OrderRepository;
use App\Models\OrderDetail;  
use App\Models\OrderTime; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;


class GroupController extends Controller
{
    protected $orderTime;
    protected $orderDetail;

    public function __construct(OrderTime $orderTime, OrderDetail $orderDetail){
        $this->orderTime             = new OrderRepository($orderTime); 
        $this->orderDetail             = new OrderRepository($orderDetail); 
    }
    public function index(){
        return view("admin.manager.group");
    }

    public function get(){
        $data = $this->orderTime->get_all();
        return $this->orderTime->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->orderTime->get_one($id);
        return $this->orderTime->send_response(200, $data, null);
    }
 
    public function create(Request $request){    

        $data = [  
            "name"      => $request->data_name,   
            "email"      => $request->data_email,   
            "phone"      => $request->data_phone,   
            "address"      => $request->data_address,   
            "prices"      => $request->data_prices ,   
        ]; 
        $data_create = $this->orderTime->create($data);  

        $sub_data = json_decode($request->data_cart, true);
        foreach ($sub_data["data"] as $key => $value) {
            $item = json_decode($value, true);
            $data_item = [  
                "order_id"      => $data_create->id,   
                "food_id"      => $item["id"],   
                "quantity"      => $item["quantity"],    
            ]; 
            $this->orderDetail->create($data_item);  
        }

        return $this->orderTime->send_response("Create successful", $data_create, 201);
    }
}
