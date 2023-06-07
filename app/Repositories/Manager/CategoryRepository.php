<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class CategoryRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('category')->get();
    }
    
    public function get_one($id){
        return DB::table('category')
                ->where("category.id", "=", $id)
                ->first(); 
    }
    public function get_slug($slug){
        return DB::table('category')
                ->where("category.slug", "=", $slug)
                ->first(); 
    }
    
    public function get_by_slug($slug){
        return DB::table('product')
                ->select('product.*')
                ->leftjoin('category', 'product.category_id', '=', 'category.id')
                ->where("category.slug", "=", $slug)
                ->get(); 
    }
 
}
