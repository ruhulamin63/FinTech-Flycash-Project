<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officer;
use App\Models\Customer;
use App\Models\Customerstransaction;
use Validator;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Support\Facades\DB; //Import query builser 


class CustomerController extends Controller
{
<<<<<<< HEAD
    public function show()
    {
        $customer= Customer::all(); //change Officer to (Customer)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return response()->json([
            'status' => 200,
            'customers' => $customer
        ]);
    }
    // ============================ End Insert ====================================

    public function edit($id){

        $customer= Customer::find($id);

        if ($customer) {
            return response()->json([
                'status' => 200,
                'customers' => $customer,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No customer Id Found',
            ]);
        }
    }
=======
    
<<<<<<< HEAD
>>>>>>> customer
// ============================ End Edit ====================================

    public function update(Request $req, $id)
=======
    public function updateCustomer(Request $req)
>>>>>>> customer
    {
        $customer = Customer::find($id);
        
        $customer->phone = $req->input('phone');
        $customer->nid = $req->input('nid');
        $customer->dob = $req->input('dob');
        $customer->type = $req->input('type');

<<<<<<< HEAD
        $customer->update();

        return response()->json([
            'status' => 200,
            'message' => 'Customer Update Successfully',
        ]);
    }

    // ============================ End Update ====================================

    public function delete($id){
  
        $users = Customer::find($id); //change model name
        
        return view('pages.officer.customer.delete')->with('user', $users);
=======
            if ($validator->fails()) {
                return response()->json([
                    'error'=> $validator->errors(),
                ]);
            }else{
                $customer= Customer::where('email',$req->email)
                ->first();
                $customer->phone = $req->phone;
                $customer->name = $req->name;
                $customer->save();
                if($customer){
                    $newData = Customer::where('email', $req->email)
                    ->first();
                    return response()->json([
                        'status' => 200,
                        'user_status' => $newData,
                        'message' => "Profile Updated",
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 240,
                        'message' => "Error",
                    ]);

                }
            }
       
    }
    public function upload(Request $req)
    {
        //$customer= Customer::all(); //change Officer to (Customer)->tablename
        //$customer = DB::table('customerstransactions')->where('email', '=', $email)->get();

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        // return response()->json([
        //     'status' => 200,
        //     'customers' => $req->data
        // ]);
        //$newName= $random().'.'.$req->data->getClientOriginalExtension();
        //$newName=$req->file('data')->getClientOriginalName();
    //     $fielnames = $request->input('name');
    //   $email = $request->input('email');
    //   $filepath = $request->file('file')->store('products');
       
    //   $upload=DB::table('image')->insert([
    //         'name' =>  $fielnames ,
    //         'img_path' => $filepath,
    //         'email'=> $email
    //       ]); 
    //       if($upload)
    //       {
    //         return response()->json($upload);

    //       }else{
    //         return response()->json($upload);
    //       }
          return response()->json($upload);
    }
// ============================ End Edit ====================================

    public function update(Request $req, $id)
    {
        $customer = Customer::find($id);
        
        $customer->phone = $req->input('phone');
        $customer->nid = $req->input('nid');
        $customer->dob = $req->input('dob');
        $customer->type = $req->input('type');

            if ($validator->fails()) {
                return response()->json([
                    'error'=> $validator->errors(),
                ]);
            }else{
                $customer= Customer::where('email',$req->email)
                ->first();
                $customer->phone = $req->phone;
                $customer->name = $req->name;
                $customer->save();
                if($customer){
                    $newData = Customer::where('email', $req->email)
                    ->first();
                    return response()->json([
                        'status' => 200,
                        'user_status' => $newData,
                        'message' => "Profile Updated",
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 240,
                        'message' => "Error",
                    ]);

                }
            }
       
    }
    //******************************Officer function************************* */
    public function show()
    {
        $customer= Customer::all(); //change Officer to (Customer)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return response()->json([
            'status' => 200,
            'customers' => $customer
        ]);
>>>>>>> customer
    }
    // ============================ End Insert ====================================

    public function edit($id){

<<<<<<< HEAD
        $users = Customer::find($id);
        $users->delete();
=======
        $customer= Customer::find($id);
>>>>>>> customer

        if ($customer) {
            return response()->json([
                'status' => 200,
                'customers' => $customer,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No customer Id Found',
            ]);
        }
    }
// ============================ End Edit ====================================

<<<<<<< HEAD
<<<<<<< HEAD
//===========================Officer get transaction for customer=================================

    public function view()
    {
        $customer= Customerstransaction::all(); //change Officer to (Customer)->tablename
        //$customer = DB::table('customerstransactions')->where('email', '=', $email)->get();

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return response()->json([
            'status' => 200,
            'customers' => $customer
        ]);
    }

    public function userblocked($id)
    {
        //dd($email);
        $update =  DB::table('customers')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'blocked',
        ]);
    
        if ($update)
        {
            return response()->json([
                'status' => 200,
                'updates' => $update,
                'message' =>"Customer Transaction Blocked",
            ]);

        }else{
            return response()->json([
                'message' => 'Not updated'
            ]);
        }
    }

    public function userunblocked($id)
    {
        
        //dd($email);
        $update =  DB::table('customers')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'unblocked',
        ]);
    
        if ($update)
        {
            return response()->json([
                'status' => 200,
                'updates' => $update,
                'message' =>"Customer Transaction Unblocked",
            ]);

        }else{
            return response()->json([
                'message' => 'Not updated',
            ]);
        }
        
    }

//======================================End Officer Function========================================

    public function editCustomer(){

        return view('profile.edit');


    }
    public function editCustomerdone(){

        return view('profile.edit');


    }
    public function changeCustomerPassword(){
=======
    public function update(Request $req, $id)
    {
        $customer = Customer::find($id);
        
        $customer->phone = $req->input('phone');
        $customer->nid = $req->input('nid');
        $customer->dob = $req->input('dob');
        $customer->type = $req->input('type');
>>>>>>> customer

        $customer->update();

        return response()->json([
            'status' => 200,
            'message' => 'Customer Update Successfully',
        ]);
    }

=======
  
>>>>>>> customer

//===========================Officer get transaction for customer=================================

    public function view()
    {
        $customer= Customerstransaction::all(); //change Officer to (Customer)->tablename
        //$customer = DB::table('customerstransactions')->where('email', '=', $email)->get();

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return response()->json([
            'status' => 200,
            'customers' => $customer
        ]);
    }
<<<<<<< HEAD
    public function changeCustomerPasswordDone(EditProfileRequest $req){
=======
>>>>>>> customer

//===============Block & Unblock Part====================

    public function userblocked($id)
    {
        //dd($email);
        $update =  DB::table('customers')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'blocked',
        ]);
    
        if ($update)
        {
            return response()->json([
                'status' => 200,
                'updates' => $update,
                'message' =>"Customer Transaction Blocked",
            ]);

        }else{
            return response()->json([
                'message' => 'Not updated'
            ]);
        }
    }

    public function userunblocked($id)
    {
        
        //dd($email);
        $update =  DB::table('customers')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'unblocked',
        ]);
    
        if ($update)
        {
            return response()->json([
                'status' => 200,
                'updates' => $update,
                'message' =>"Customer Transaction Unblocked",
            ]);

        }else{
            return response()->json([
                'message' => 'Not updated',
            ]);
        }
    }
}
