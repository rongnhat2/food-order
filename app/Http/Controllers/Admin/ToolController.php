<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ToolRepository;
use App\Models\Tool; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ToolController extends Controller
{
    protected $tool;

    public function __construct(Tool $tool){
        $this->tool             = new ToolRepository($tool); 
    }
    public function index(){
        return view("admin.manager.tool");
    }

    public function get(){
        $data = $this->tool->get_all();
        return $this->tool->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->tool->get_one($id);
        return $this->tool->send_response(200, $data, null);
    }
 
    public function store(Request $request){     
        $data = [  
            "name"          => $request->data_name,   
            "description"          => $request->data_description,  
            "total"          => $request->data_total,  
            "size"          => $request->data_size,  
            "valid"          => $request->data_total,  
        ];  
        $data_create = $this->tool->create($data);  
        return $this->tool->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data_one = $this->tool->get_one($request->data_id);
        $change = $request->data_total - $data_one->total; 
        $data = [  
            "name"              => $request->data_name,   
            "description"    => $request->data_description,  
            "size"          => $request->data_size,  
            "total"          => $request->data_total,  
            "valid"          => $data_one->valid + $change,  
        ];
 
        $data_update = $this->tool->update($data, $request->data_id);
        return $this->tool->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->tool->delete($id); 
        return $this->tool->send_response(200, "Delete successful", null);
    }
}
