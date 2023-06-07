<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class IngredientRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('ingredient')->get();
    }
    
    public function get_one($id){
        return DB::table('ingredient')
                ->where("ingredient.id", "=", $id)
                ->first(); 
    } 
 
}
