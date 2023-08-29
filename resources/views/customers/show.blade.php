@extends('layout')

@section('title','Details for'.$customer->name)


@section('content')

      <br>
      <br>
      <br>
      <h4>Details for {{$customer->name }}</h4>



    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $customer->name }}</p>
            <p><strong>Email</strong> {{ $customer->email }}</p>
            <p><strong>Status</strong> {{ $customer->cactive ? 'He is an Active user' : 'He is an Inactive user' }}</p>
            <p><strong>Company</strong> {{ $customer->company->name }}</p>
        </div>
    </div>
   

      


@endsection
