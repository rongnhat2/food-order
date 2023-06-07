<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class ProductRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('product')
                ->select('product.*', 'category.name as category_name')
                ->leftjoin('category', 'category.id', 'product.category_id')
                ->get();
    }
    
    public function get_one($id){
        return DB::table('product')
                ->where("product.id", "=", $id)
                ->first(); 
    }
    public function get_slug($slug){
        return DB::table('product')
                ->where("product.slug", "=", $slug)
                ->first(); 
    }
    public function get_same($id){
        return DB::table('product')
                ->where("product.category_id", "=", $id)
                ->get(); 
    }
    public function update_link($link){
        DB::table('product') 
                ->update(['link' => $link]); 
    }
 
}
