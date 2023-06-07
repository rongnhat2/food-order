<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product){
        $this->product             = new ProductRepository($product); 
    }
    public function index(){
        return view("admin.manager.product");
    }
    public function link(){
        return view("admin.manager.link");
    }

    public function link_update(Request $request){   
        $data_update = $this->product->update_link($request->data_link);
        return $this->product->send_response("Update successful", $data_update, 200);
    }
    

    public function get(){
        $data = $this->product->get_all();
        return $this->product->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->product->get_one($id);
        return $this->product->send_response(200, $data, null);
    }
 
    public function store(Request $request){    
        $data_image = $this->product->imageInventor('image-upload', $request->data_image, 900);
        $data = [ 
            "category_id"      => $request->data_category, 
            "name"      => $request->data_name,  
            "link"      => $request->data_link,  
            "description"      => $request->data_description, 
            "slug"          => $this->product->to_slug($request->data_name), 
            "image"      => $data_image,   
            "detail"      => $request->data_detail, 
        ]; 
        $data_create = $this->product->create($data);  
        return $this->product->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "category_id"      => $request->data_category, 
            "name"      => $request->data_name,  
            "link"      => $request->data_link,  
            "description"      => $request->data_description, 
            "slug"          => $this->product->to_slug($request->data_name),  
            "detail"      => $request->data_detail, 
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->product->imageInventor('image-upload', $request->data_image, 900);
        } 
        $data_update = $this->product->update($data, $request->data_id);
        return $this->product->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->product->delete($id); 
        return $this->product->send_response(200, "Delete successful", null);
    }
}
