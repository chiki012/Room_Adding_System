<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function show($id){
        $photo = Photo::find($id);
    
        if($photo){
            return view('details', compact('photo')); 
        }else{
            return response()->json(['status'=>false]);
        }
    }

    public function create(){
        $photos = Photo::all();
        return view('upload', compact('photos'));
    }

    public function store(Request $request){
        
        // $name = $request->file('photo')->getClientOriginalExtension();
        // $name = $request->file('image')->getClientOriginalName(); 
        // $path = $request->photo->path();
        // $extension = $request->photo->extension();
        // $size = $request->file('image')->getSize(); 
        // echo $path .  "<br>" . $size;
        // echo "<br>";

        // $request-> file('image')->store('public/images/');


        $name = null;

        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $name = $request->file('image')->getClientOriginalName(); 
            $request->file('image')->storeAs('public/', $name);
        }
        
        // $request-> file('image')->storeAs('public/', $name);
        $owner_name  = $request->owner_name;
        $phone_num  = $request->phone;
        $room_name  = $request->room_name;
        $room_description  = $request->room_description;
        $amount  = $request->price;
        
    
        
        $photo = new Photo();
        $photo->owner_name = $owner_name;
        $photo->phone_number = $phone_num;
        $photo->room_name = $room_name;
        $photo->room_description = $room_description;
        $photo->price = $amount;
        $photo->image_name = $name;
        // $photo->size = $size;
        $photo->room_type = $request->room_type;
        

        $photo->save();
        return redirect()->back();
        // dd($request->file());
    }
}