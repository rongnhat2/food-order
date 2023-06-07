<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class NewsRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('news') 
                ->get();
    }
    
    public function get_one($id){
        return DB::table('news')
                ->where("news.id", "=", $id)
                ->first(); 
    }
    
    public function get_by_slug($slug){
        return DB::table('news')
                ->where("news.slug", "=", $slug)
                ->first(); 
    }
 
}
