<?php

function countpsubcategort($psubcategory_id){
    $data = \App\Models\Product::where('psubcategory_id',$psubcategory_id)->where('is_show',1)->get();
        return $data;   
}

function countsubcategort($psubcategory_id,$subcategory_id){
    $data = \App\Models\Product::where(['psubcategory_id'=>$psubcategory_id,'subcategory_id'=>$subcategory_id,'is_show'=>1])->get();
    return $data;   
}


?>