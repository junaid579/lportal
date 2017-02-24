<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loginModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
     
    // public function get_details(){
    //   if(isset($_POST['get_details']) && $_SERVER['REQUEST_METHOD']=='POST'){
    //   $users = DB::table('employees')->get();
    //     foreach ($users as $user) {
    //     $employee =$user->employee;
    //     $emp_id = $user->emp_id;
    //     echo "$employee";
    //     echo "$emp_id";
    //     }
    	
	// 	}  
    // }
     
    public function login(Request $request){
        // Validate the request...

        // $user = new loginmodel;
        // $user->employee = $request->employee;
        // $user->emp_id = $request->emp_id;
        // $user->salary = $request->salary;
        // $user->save();
        // echo "Employee Registered";
        // return view('test'); 

         $users = DB::table('users')->get();
                    // echo $users;
                     print_r($users->user_name);
                     if ($users == 1 ) {
                        echo "string";
                         # code...
                     }

      //     foreach ($users as $user) {
      //        $nameOfUser = $user->username;
      //        $passOfUser = $user->password;
      //        $data = array(
      //        'nameOfUser'=>$user->username,
      //        'passOfUser'=>$user->password 
      //         );

      // }
    }

    // public function fetch(){
    //   if(isset($_POST['fetch']) && $_SERVER['REQUEST_METHOD']=='POST'){

    //     $users = DB::table('people')->get();
    //       foreach ($users as $user) {
    //     	//$nameOfUser = $user->username;
    //    		//$passOfUser = $user->password;
    //  			$data = array(
    //           'nameOfUser'=>$user->username,
    //           'passOfUser'=>$user->password 
    //           );
    //           //echo $user->username;
    //           return view('display')->with($data);

    //         }

		  //   }		
    //}
  // public function findAction(\Illuminate\Http\Request $request) {
  //   if ($request->has('register')) {
  //       return $this->dispatch(new \App\Jobs\register($request));
  //   } else if ($request->has('get_details')) {
  //       return $this->dispatch(new \App\Jobs\get_details($request));
  //   }
  //   return 'no action found';
  //   }
}
