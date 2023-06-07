<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Manager\IngredientRepository;
use App\Models\Ingredient; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    protected $ingredient;

    public function __construct(Ingredient $ingredient){
        $this->ingredient             = new IngredientRepository($ingredient); 
    }
    public function login(){
        return view('admin.auth.login');
    }
    public function index(){
        return redirect()->route("admin.ingredient.index");
    }
    public function statistic(){
        return view('admin.manager.statistic');
    }
    public function image(Request $request){
        $data = $this->product->imageInventor('image-upload', $request->file, 1280);
        return $this->product->send_response(201, $data, null);
    }
}
