<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class OrderRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('order_time')->get();
    }
    
    public function get_one($id){
        return DB::table('order_time')
                ->where("order_time.id", "=", $id)
                ->first(); 
    } 

    public function get_order_sub($he_so){
        return DB::table('order_detail')
                ->select("order_detail.*", "food.coefficient", "food.name")
                ->leftjoin("food", "food.id", "=", "order_detail.food_id")
                ->where([["order_detail.status", "=", "1"], ["food.coefficient", "<=", $he_so]])
                ->orderBy('order_detail.created_at','asc')
                ->first(); 
    } 
 
}
