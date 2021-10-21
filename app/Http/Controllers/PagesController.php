<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Config;

class PagesController extends Controller
{
   public function index(){
       $title = "APP Cuz";
    return view('pages.index', compact('title'));
   } 

   public function about(){
    $host = Product::get('id');
    return view('pages.about', compact('host'));
   } 

   

   public function TestDatabaseConnection(){
      try {
          $database_host = Config::get('config.database_host');
          $database_name = Config::get('config.database_name');
          $database_user = Config::get('config.database_user');
          $database_password = Config::get('config.database_password');
  
          $connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);
  
          if (mysqli_connect_errno()){
                  return false;
              } else {
                  return true;
              }
  
      } catch (Exception $e) {
  
          return false;
  
      }
  }
}
