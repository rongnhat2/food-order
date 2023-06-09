<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Manager\IngredientRepository;
use App\Models\Ingredient; 

use App\Repositories\Manager\FoodRepository;
use App\Models\Food; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    protected $food;

    public function __construct(Food $food){
        $this->food             = new FoodRepository($food); 
    }
    public function index(){
        $food = $this->food->get_all();
        return view("customer.index", compact('food'));
    }
    public function category(){
        $food = $this->food->get_all();
        return view("customer.category", compact('food'));
    }
    public function cart(){
        $food = $this->food->get_all();
        return view("customer.cart", compact('food'));
    }
    public function checkout(){
        $food = $this->food->get_all();
        return view("customer.checkout", compact('food'));
    }
}
