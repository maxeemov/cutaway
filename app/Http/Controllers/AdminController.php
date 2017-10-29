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
   public function index(){
    return view('admin');
   } 
  
  public function select(){
    $result = User::all();
    dump($result);
  }
  
  public function update(){
    $result=User::findOrFail($this->id)->update(['name'=>$this->name, 'login'=>$this->login,'email'=>$this->email]);
    echo'данные изменены успешно!';
    return view('home');
  }
  public function delete(){
    $result=User::withTrashed()->where('email',$this->email);
  }
  
  public function restore(){
    $result=User::where('email',$this->email)->restore();
  }
}
