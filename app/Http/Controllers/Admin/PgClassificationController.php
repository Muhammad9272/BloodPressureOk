<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PgClassification;
use Illuminate\Support\Facades\Input;
use Validator;

class PgClassificationController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request


    //*** GET Request
    public function index()
    {
        $datas = PgClassification::orderBy('id','desc')->get();
        return view('admin.pages.classification.index',compact('datas'));
    }

    //*** GET Request
    public function create()
    {
        return view('admin.pages.classification.create');
    }

    //*** POST Request
    public function store(Request $request)
    {

        $slug = $request->slug;
        $main = array('home','faq','contact','blog');
        if (in_array($slug, $main)) {
        return response()->json(array('errors' => [ 0 => 'This slug has already been taken.' ]));          
        }
        $rules = ['slug' => 'unique:pg_classifications'];
        $customs = ['slug.unique' => 'This slug has already been taken.'];
        $validator = Validator::make($request->all(), $rules, $customs);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


        //--- Logic Section
        $data = new PgClassification();
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
        $data = PgClassification::findOrFail($id);

        return view('admin.pages.classification.edit',compact('data'));
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
        $data = PgClassification::findOrFail($id);
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
        $data = PgClassification::findOrFail($id);
        $data->delete();
    
        return redirect()->route('admin-pgclass-index')->with('status', 'Data Deleted Successfully!');
        //--- Redirect Section Ends     
    }
}
