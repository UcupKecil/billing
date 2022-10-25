<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;
class KategoriBerita extends Model
{
    protected $fillable=['title','slug','status'];

    public function post(){
        return $this->hasMany('App\Berita','post_cat_id','id')->where('status','active');
    }

    public static function getBlogByCategory($slug){
        return KategoriBerita::with('post')->where('slug',$slug)->first();
    }
}
