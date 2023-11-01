<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;
use Config;
use Validator;
use Mail;
use Session;

class CategoryController extends Controller
{
     public function list(Request $request){
        if($request -> method() == 'GET'){
            $categoryName = Category::where(['isActive'=> "1"])-> get();
            return view("admin.category.category-list", ['title' => "Categories", 'category' => $categoryName]);
        }else if($request -> method() == 'POST'){

        }else{
            return view('404');
        }
    }

    public function add(Request $request){
        if($request -> method() == 'GET'){
            return view("admin.category.add-category", ['title' => "Add Categories"]);
        }else if($request -> method() == 'POST'){
            $request->validate([
                'name'  =>'required|string',
                'details'=> 'string|nullable'
            ]);
            $duplicateCategaryCheck = Category::where('name',$request->name)->count();
            if($duplicateCategaryCheck == 0) {
                $category = New Category([
                    'name' => $request -> input('name'),
                    'details' => $request -> input('details')?$request -> input('details'):'',
                    'isActive' => "1",
                    'slug_name' => Str::slug($request->input('name'))
                ]);
                if($category->save()){
                    return Redirect::to('/author/category')-> with('successmsg',Config::get('constants.ADD_SUCCESS'))->withInput($request->all);
                }else{
                    return Redirect::to('/author/category')-> with('errmsg',Config::get('constants.ADD_ERROR'))->withInput($request->all);
                }
            }else{
                return Redirect::to('/author/category')-> with('errmsg',"Already Exist This Categary")->withInput($request->all);
            }

        }else{
            return view('404');
        }
    }

    public function update(Request $request,$id=''){
        if($request -> method() == 'GET' || $id != ''){
            $categoryName = Category::where(['isActive'=> "1",'id'=>$id])-> first();
            return view("admin.category.update-category", ['title' => "Category" ,'category'=>$categoryName]);
        }else if($request -> method() == 'POST'){
            $request->validate([
                'name'  =>'required|string',
                'details'=> 'string|nullable'
            ]);
            $duplicateCategaryCheck = Category::where('name',$request->name)->where('id','!=',$request->id)->count();
            if($duplicateCategaryCheck == 0) {
               
                $update_data = Category::where('id', $request->id)->update([
                    'name' => $request -> input('name'),
                    'details' => $request -> input('details')?$request -> input('details'):'',
                    'isActive' => "1",
                    'slug_name' => Str::slug($request->input('name'))
                ]);
                if($update_data){
                    return Redirect::to('/author/category')-> with('successmsg',Config::get('constants.UPDATE_SUCCESS'))->withInput($request->all);
                }else{
                    return Redirect::to('/author/category')-> with('errmsg',Config::get('constants.UPDATE_ERROR'))->withInput($request->all);
                }
            }else{
                return Redirect::to('/author/category')-> with('errmsg',"Already Exist This Categary")->withInput($request->all);
            }
        }else{
            return view('404');
        }
    }

    public function delete(Request $request,$id=''){
        if($request -> method() == 'GET'|| $id != ''){
            $data =Category ::find($id);
            $delete = $data->delete();
            if($delete){
                return Redirect::to('/author/category')-> with('successmsg',Config::get('constants.DELETE_SUCCESS'))->withInput($request->all);
            }else{
                return Redirect::to('/author/category')-> with('errmsg',Config::get('constants.DELETE_ERROR'))->withInput($request->all);
            }
        

        }else if($request -> method() == 'POST'){

        }else{
            return view('404');
        }
    }

}
