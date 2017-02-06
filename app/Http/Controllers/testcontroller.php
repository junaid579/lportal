<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class testcontroller extends Controller
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
     
    // public function register(Request $request){
    //     // Validate the request...
    //   if(isset($_POST['register']) && $_SERVER['REQUEST_METHOD']=='POST'){

    //     $employee = new testmodel;
    //     $employee->employee = $request->employee;
    //     $employee->emp_id = $request->emp_id;
    //     $employee->salary = $request->salary;
    //     $employee->save();
    //     echo "Employee Registered";
    //     return view('test'); 
    //   }
    // }

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
  public function findAction(\Illuminate\Http\Request $request) {
    if ($request->has('register')) {
        return $this->dispatch(new \App\Jobs\register($request));
    } else if ($request->has('get_details')) {
        return $this->dispatch(new \App\Jobs\get_details($request));
    }
    return 'no action found';
}
}
