<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{


    public function index()
    {

     $food =Food::get();
    return($food) ;

    }






    public function getFoodById($id){

 $food= Food::find($id);
 if ($food){
    return $food;

     $msg=['the  product return successfully '];
//    return $this->apiresponse(new ProductResource($product));




 }else{
    $msg=['this  product not found '];
    return $this->apiresponse($food,$msg,404);
 }

    }





    public function updateFood(Request $request, $id){
        $food=Food::find($id);

        $food->update($request->all());

        //   return $this->$exercies;
       if($food){
         $msg=['the  exercies updated successfully '];
             return $food;
        }else{

        return['result'=>'food not  found'];

       }
    }





    public function deleteFood(){

        $food=Food::find($id);
        $result = $food->delete();
        if($result){
            return['result'=>'exercies deleted'];
           }else{
            return['result'=>'exercies not  deleted'];

           }
    }
}
