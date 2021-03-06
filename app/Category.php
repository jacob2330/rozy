<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Products;
use App\Enjoy;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    public $fillable = ['name','description','seo_keys','order','seo_description','slug'];
    public $timestamps = false;
    protected $table = 'categories';
    public function Products(){
        return $this->hasMany('App\Product','idcat','id');
    }
    public function getProducts(){
        return $this->Products()->get();
    }
    public function getTrendProducts($limit=13){
        return $this->Products()->selectRaw('products.*')
        ->join('orderdetails','products.id','=','orderdetails.idpro')
        ->groupBy('products.id')->orderByRaw('SUM(orderdetails.quantity) DESC')->limit($limit)->get();
    }
    public function recommandCategories($getArray=null){
        $cats = collect();
        $cart = new Cart();
        foreach($cart->getCart() as $product){
            $pro = Product::find($product['id']);
            $cat = $pro->getCategory();
            foreach($cats as $myCat){
                if($cat->id==$myCat->id) goto SKIP;
            }
            $cats->push($cat);
            SKIP:
        }
        $viewedList = json_decode(Cookie::get('viewedList'),true) ?? [];
        foreach($viewedList as $product){
            $pro = Product::where('slug',$product['slug'])->first();
            $cat = $pro->getCategory();
            foreach($cats as $myCat){
                if($cat->id==$myCat->id) goto SKIP2;
                
            }
            $cats->push($cat);
            SKIP2:
        }
        $enjoy = new Enjoy();
        foreach($enjoy->getEnjoy() as $product){
            if($product['type']==2) continue;
            $pro = Product::find($product['id']);
            $cat = $pro->getCategory();
            foreach($cats as $myEnjoy){
                if($cat->id==$myEnjoy->id) goto SKIP3;
            }
            $cats->push($cat);
            SKIP3:
        }
        if($getArray!==null){
            return $cats;
        }
        if($cats->count()<10){
            $notEqualCat = [];
            foreach($cats as $myCat){
                $notEqualCat[] = $myCat->id;
            }
            $extraCats = $this->whereNotIn('id',$notEqualCat)->limit(10-$cats->count())->get();
            $cats = $cats->concat($extraCats);
        }
        return $cats;
    }
    public function getCountEachCategory(){
        $user = Auth::user();
        $role_id = $user->role_id;
        if($role_id==1) $cats = $this->selectRaw('count(products.id) as count,categories.name as name')
        ->leftjoin('products','products.idcat','=','categories.id')
        ->groupBy("categories.id")->get();
        elseif($role_id==3) $cats = $this->selectRaw('count(products.id) as count,categories.name as name')
        ->leftjoin('products','products.idcat','=','categories.id')->whereRaw('products.idsell='.$user->Seller()->id)
        ->groupBy("categories.id")->get();
        return $cats->toJson();
    }
}
