<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\FoodRepository;
use App\Models\Food; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class FoodController extends Controller
{
    protected $food;

    public function __construct(Food $food){
        $this->food             = new FoodRepository($food); 
    }
    public function index(){
        return view("admin.manager.food");
    }

    public function get(){
        $data = $this->food->get_all();
        return $this->food->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->food->get_one($id);
        return $this->food->send_response(200, $data, null);
    }
 
    public function store(Request $request){   
        $data_image = $this->food->imageInventor('image-upload', $request->data_image, 900);   
        $data = [  
            "name"          => $request->data_name,   
            "description"          => $request->data_description,  
            "coefficient"          => $request->data_coefficient,   
            "price"          => $request->data_price,  
            "image"      => $data_image,    
        ];  
        $data_create = $this->food->create($data);  
        return $this->food->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data_one = $this->food->get_one($request->data_id);
        $change = $request->data_total - $data_one->total; 
        $data = [  
            "name"              => $request->data_name,   
            "description"    => $request->data_description,  
            "coefficient"          => $request->data_coefficient,   
        ];
 
        $data_update = $this->food->update($data, $request->data_id);
        return $this->food->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->food->delete($id); 
        return $this->food->send_response(200, "Delete successful", null);
    }
}
