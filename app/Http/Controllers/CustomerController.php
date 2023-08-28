<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{
   public function list(){

   //$customers= Customer::all();

   //  dd($customers);

    //return view('internals.customer',['cus'=>$customers]);

   $activeCustomer=Customer::active()->get();
   $inactiveCustomer=Customer::inactive()->get();
   $companies = Company::all();

   //  return view('internals.customer',
   //  ['active'=>$activeCustomer],
   //  ['inactive'=>$inactiveCustomer],);

   return view('internals.customer',
   compact('activeCustomer','inactiveCustomer','companies'));


   }

   public function store(){
      $data=request()->validate([ 
         'name'=> 'required|min:3',
         'email'=>'required|email',
         'active'=>'required',
         'company_id'=>'required']);

      Customer::create($data);


      // $customer=new Customer();
      // $customer->name=request('name');
      // $customer->email=request('email');
      // $customer->active=request('active');
      // $customer->save();

      return back();


   //  dd(request('name'));

   }
}
