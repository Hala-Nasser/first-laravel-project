<?php

namespace App\Http\Controllers\sweet;

use App\Http\Controllers\Controller;
use App\Http\Requests\sweetRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class sweetController extends Controller{

	public function index(){

		$sweets = DB::table('sweets')->select('*')->get();

		return view('sweet.index')->with('sweets', $sweets);
	}


	public function create(){
		return view('sweet.create');
	}

	public function store(Request $request){

		$photo_path = null;
		if ($request->hasFile('image') && $request->file('image')->isValid()){
			$file = $request->file('image');
			$photo_path = $file->store('/',['disk' => 'uploads']);
		}

		$name = $request['name'];
		$price = $request['price'];
		$quantity = $request['quantity'];

		$query = "insert into sweets(name, price, quantity, image) values ('$name', $price, $quantity, '$photo_path')";

		$result = DB::statement($query);

		if ($result) {
			return redirect('sweet');
		}else{
			return redirect()->back();
		}
	}

}
