<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{


   public function __construct()
   {
      // $this->middleware('auth');
      $this->middleware('auth')->except(['index']);

      
   } 
   
  public function index (){

   //$customers= Customer::all();

   //  dd($customers);

    //return view('internals.customer',['cus'=>$customers]);


   // $activeCustomer=Customer::active()->get();
   // $inactiveCustomer=Customer::inactive()->get();
   // $companies = Company::all();

    //  return view('internals.customer',
   //  ['active'=>$activeCustomer],
   //  ['inactive'=>$inactiveCustomer],);

   // return view('customers.index',
   // compact('activeCustomer','inactiveCustomer','companies'));

   $customers=Customer::all();

   return view('customers.index',compact('customers'));


   }

   public function create(){

      $companies = Company::all();
      $customer = new Customer();
      return view('customers.create',compact('companies','customer'));
   }




   public function store(){

      $data=request()->validate([ 
         'name'=> 'required|min:3',
         'email'=>'required|email',
         'active'=>'required',
         'company_id'=>'required']);

      Customer::create($this->validateRequest());

      // $customer=new Customer();
      // $customer->name=request('name');
      // $customer->email=request('email');
      // $customer->active=request('active');
      // $customer->save();

      return redirect('customers');

   //  dd(request('name'));
   
   }

   public function show(Customer $customer){
      // $customer=Customer::find($customer);
      // $customer=Customer::where('id',$customer)->firstOrFail();

   
      return view('customers.show',compact('customer'));
   }

   public function edit(Customer $customer){

      $companies = Company::all();
      return view('customers.edit',compact('customer','companies'));
   }


   public function update(Customer $customer){

      $customer->update($this->validateRequest());

      return redirect('customers/'.$customer->id);
   }


   private function validateRequest(){

      return request()->validate([ 
         'name'=> 'required|min:3',
         'email'=>'required|email',
         'active'=>'required',
         'company_id'=>'required'
      ]);
   }


   public function destroy(Customer $customer)
    {
      //   $this->authorize('delete', $customer);

        $customer->delete();

        return redirect('customers');
    }


}