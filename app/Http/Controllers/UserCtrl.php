<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsereMdl;
use App\Role;
class UserCtrl extends Controller
{
       public function manageUser()
    {
 
        $users = UsereMdl::all();
        $roles = Role::orderBy('name','DESC')->get();
       return view('users.users', compact('user','roles'));
   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function dumpUser()
     {
        // dump(UsereMdl::all());
        dump(role::all());
     }
    public function index(Request $request)
    {
   
     $users = UsereMdl::with('role')->latest()->paginate(5);
     return response()->json($users);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Role::pluck('name', 'id');
        $this->validate($request, array(
                'name' => 'required|max:255|unique:users',
                'username' => 'required|max:255|unique:users',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            )
        );

         $create = usereMdl::create(array(
            'active' =>  $request['active'], 
            'role_id' => $request['role_id'], 
            'name' => $request['name'],
            'username' => $request['username'],  
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'remember_token'=> str_random(10),
            )
        );
      $validation = Validator::make($request->all(), $validationRules);

        if ($validation->fails())
        {
            return  Redirect::route('usere.create')->withInput()->withErrors($v->errors());
        }
      //  
     // header('content-type: application/json');
        return response()->json($create); 
        $request->session()->flash('status', 'Task was successful!');
      //  return response()->json('Sukses', 200);      
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = UsereMdl::find($id)->update($request->all());
        return response()->json($edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UsereMdl::find($id)->delete();
        return response()->json(['done']);
    }

     public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $seller = $this->create($request->all());

        //Authenticates seller
       // $this->guard()->login($seller);

       //Redirects sellers
      //  return redirect($this->redirectPath);
    }


    //Get the guard to authenticate Seller
 //  protected function guard()
 //  {
 //      return Auth::guard('web_seller');
 //  }

}
