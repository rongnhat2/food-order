<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\NewsRepository;
use App\Models\News; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class NewsController extends Controller
{
    protected $news;

    public function __construct(News $news){
        $this->news             = new NewsRepository($news); 
    }
    public function index(){
        return view("admin.manager.news");
    }

    public function get(){
        $data = $this->news->get_all();
        return $this->news->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->news->get_one($id);
        return $this->news->send_response(200, $data, null);
    }
 
    public function store(Request $request){    
        $data_image = $this->news->imageInventor('image-upload', $request->data_image, 900);
        $data = [  
            "name"      => $request->data_name,   
            "description"      => $request->data_description, 
            "slug"          => $this->news->to_slug($request->data_name), 
            "image"      => $data_image,   
            "detail"      => $request->data_detail, 
        ]; 
        $data_create = $this->news->create($data);  
        return $this->news->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [  
            "name"      => $request->data_name,   
            "description"      => $request->data_description, 
            "slug"          => $this->news->to_slug($request->data_name),  
            "detail"      => $request->data_detail, 
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->news->imageInventor('image-upload', $request->data_image, 900);
        } 
        $data_update = $this->news->update($data, $request->data_id);
        return $this->news->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->news->delete($id); 
        return $this->news->send_response(200, "Delete successful", null);
    }
}
