@extends('layouts.app')

@section('title','Customers List')


@section('content')

      
      <div class="row"><h1> Customers List</h1>
    
  
  </div><p><a href="{{ route('customers.create') }}">Add new customer</a></p>

  @foreach($customers as $customer)
    <div class="row">
      <div class="col-2">
        {{$customer->id}}
      </div>
      <div class="col-4"><a href="{{ route('customers.show', ['customer' => $customer]) }}">{{$customer->name}}</a></div>
      <div class="col-4">{{$customer->company->name}}</div>
      <!-- <div class="col-2">{{$customer->active ? 'Active':'Inactive'}}</div> -->
      <div class="col-2">{{$customer->active}}</div>


    </div>
  @endforeach





@endsection
