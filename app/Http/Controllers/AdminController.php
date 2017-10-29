<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
  protected $email;
  protected $name;
  protected $login;
  protected $id;
  
  public function __construct(Request $result){
    //$this->middleware('auth');
    $this->email=$result->email;
    $this->name=$result->name;
    $this->login=$result->login;
    $this->id=$result->id;
  }
  
   public function index(Request $request, $site=''){
    return view($site);
   } 
  
  public function select(){
    $result = User::findOrFail($this->id);
    //flash('Data is change!');
    dump($result);
     return view('home');
  }
  
  public function update(){
    $result=User::findOrFail($this->id)->update(['name'=>$this->name, 'login'=>$this->login,'email'=>$this->email]);
     dump($result);
    //flash('Data is change!');
    return view('home');
  }
  public function delete(){
    $result=User::findOrFail($this->id)->delete();
    
  }
  
  public function restore(){
    $result=User::where('email',$this->email)->restore();
  }
}
