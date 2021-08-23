<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\orders;
use DB;



class pageController extends Controller
{
 public function save(Request $req){
  
   $orders= new orders;
   $orders->item=$req->item;
   $orders->quantity=$req->quantity;
   $orders->driver=$req->driver;
   $orders->date=date('Y-m-d');
  

   $orders->save();
   $data = orders::all();
   return view('add-data',['order'=>$data]);

}
public function show(){
  $data = orders::all();
 return view('add-data',['order'=>$data]);
}


public function updateStatus($id)
{

	$orders = DB::table('orders')
				->select('status')
				->where('id','=',$id)
				->first();

	if($orders->status == '1'){
		$status = '0';
	}else{
		$status = '1';
	}


	$values = array('status' => $status );
	DB::table('orders')->where('id',$id)->update($values);

  
	return redirect('list');
}

}