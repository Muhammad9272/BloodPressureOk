<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PgRemedy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class PgRemedyController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request


    //*** GET Request
    public function index()
    {
        $datas = PgRemedy::orderBy('id','desc')->get();
        return view('admin.pages.remedies.index',compact('datas'));
    }

    //*** GET Request
    public function create()
    {
        return view('admin.pages.remedies.create');
    }

    //*** POST Request
    public function store(Request $request)
    {

        $slug = $request->slug;
        $main = array('home','faq','contact','blog');
        if (in_array($slug, $main)) {
        return response()->json(array('errors' => [ 0 => 'This slug has already been taken.' ]));          
        }
        $rules = ['slug' => 'unique:pg_remedies'];
        $customs = ['slug.unique' => 'This slug has already been taken.'];
        $validator = Validator::make($request->all(), $rules, $customs);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


        //--- Logic Section
        $data = new PgRemedy();
        $input = $request->all();
        // if ($file = $request->file('photo')) 
        //  {      
        //     $name = time().$file->getClientOriginalName();
        //     $file->move('assets/images/sliders',$name);           
        //     $input['photo'] = $name;
        // } 
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends    
    }

    //*** GET Request
    public function edit($id)
    {
        $data = PgRemedy::findOrFail($id);

        return view('admin.pages.remedies.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        //--- Validation Section
        // $rules = [
        //        'photo'      => 'mimes:jpeg,jpg,png,svg',
        //         ];

        // $validator = Validator::make($request->all(), $rules);
        
        // if ($validator->fails()) {
        //   return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        // }
        //--- Validation Section Ends

        //--- Logic Section
        $data = PgRemedy::findOrFail($id);
        $input = $request->all();
            // if ($file = $request->file('photo')) 
            // {              
            //     $name = time().$file->getClientOriginalName();
            //     $file->move('assets/images/sliders',$name);
            //     if($data->photo != null)
            //     {
            //         if (file_exists(public_path().'/assets/images/sliders/'.$data->photo)) {
            //             unlink(public_path().'/assets/images/sliders/'.$data->photo);
            //         }
            //     }            
            // $input['photo'] = $name;
            // } 
        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section     
        $msg = 'Data Updated Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends            
    }

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = PgRemedy::findOrFail($id);
        //If Photo Doesn't Exist
        // if($data->photo == null){
        //     $data->delete();
        //     //--- Redirect Section     
        //     $msg = 'Data Deleted Successfully.';
        //     return response()->json($msg);      
        //     //--- Redirect Section Ends     
        // }
        //If Photo Exist
        // if (file_exists(public_path().'/assets/images/sliders/'.$data->photo)) {
        //     unlink(public_path().'/assets/images/sliders/'.$data->photo);
        // }
        $data->delete();
        return redirect()->route('admin-pgremedy-index')->with('status', 'Data Deleted Successfully!');     
        //--- Redirect Section Ends     
    }
}
