<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function parent()
    {
      return $this->belongsTo(Category::class,'parent_id');
    }
    public function products()
    {
      return $this->hasMany(Product::class);
    }

//parentOrNotCategory get_class_methods
//check parent category or not
/**
 * parentOrNotCategory desciption
 *@param int $parent_id
 *@param int $child_id
 *
 */

    // public function static parentOrNotCategory($parent_id,$child_id)
    // {
    //   $categories = Category::where('id',$child_id)->where('parent_id',$parent_id)->get();
    //   if(!is_null($categories)){
    //     return true;
    //   }
    //   else{
    //     return false;
    //   }
    // }
}
