<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\IngredientRepository;
use App\Models\Ingredient; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class IngredientController extends Controller
{
    protected $ingredient;

    public function __construct(Ingredient $ingredient){
        $this->ingredient             = new IngredientRepository($ingredient); 
    }
    public function index(){
        return view("admin.manager.ingredient");
    }

    public function get(){
        $data = $this->ingredient->get_all();
        return $this->ingredient->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->ingredient->get_one($id);
        return $this->ingredient->send_response(200, $data, null);
    }
 
    public function store(Request $request){     
        $data = [  
            "name"          => $request->data_name,   
            "type"          => $request->data_type,  
        ]; 
        $data_create = $this->ingredient->create($data);  
        return $this->ingredient->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [  
            "name"          => $request->data_name,   
            "type"          => $request->data_type,  
        ];
 
        $data_update = $this->ingredient->update($data, $request->data_id);
        return $this->ingredient->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->ingredient->delete($id); 
        return $this->ingredient->send_response(200, "Delete successful", null);
    }
}
