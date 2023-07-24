<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function view(){
        return view('frontend.index');
    }
    public function store(Request $request){

        echo "<pre>";
        print_r($request->all());
        $form = new Form();
        $form->email = $request['email'];
        $form->password = $request['password'];
        $form->save();
        return redirect()->back()->with('status','data inserted successfully');
    }

    public function show(){
        $form = Form::all();
        $data = compact('form');
       return view('welcome')->with($data);

    }
    public function edit($forms_id){

        $nav =  Form::find($forms_id);
        print_r($nav->toArray());
        // if (is_null($nav)) 
        // return redirect('/adminmain/view');
        // else
        // $url = url('/adminmain/update')."/".$id;
        // $title = "Update Category";
        // $data = compact('nav','url','title');
        // return view('Adminpanel.adminaddmainnav')->with($data);
    //    $form = Form::find($forms_id);
    //    $data = compact('form');
    // //    return view('Edit_form')->with('edit',$form); 
    // if(is_null($data)){
    //     echo "id not found";
    // }
    // else{
    //     echo "id  found";
    // }   
    }
    public function update(Request $request){
        return view('Edit_form');

    }

    public function destroy($id){
        // $song = DB::table('forms')->find($id);
        // print_r($song);
       $form = Form::find($id)->delete();
       return back();

    }

   public function array(){


    //return Subcategory::find(1)->getSub();
    return Subcategory::find(1)->get();

    }
}
