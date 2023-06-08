<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class FoodRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('food')->get();
    }
    
    public function get_one($id){
        return DB::table('food')
                ->where("food.id", "=", $id)
                ->first(); 
    } 
    public function find_real_time($name){ 
        $sql = "SELECT  *
                FROM food 
                WHERE name like '%".$name."%' LIMIT 5";
        return DB::select($sql);
    }
 
}
