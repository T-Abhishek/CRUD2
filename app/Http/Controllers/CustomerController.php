<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{
   public function list(){

    $customers= Customer::all();

   //  dd($customers);

    return view('internals.customer',['cus'=>$customers]);
   }

   public function store(){

      $customer=new Customer();
      $customer->name=request('name');
      $customer->save();

      return back();


   //  dd(request('name'));

   }
}
