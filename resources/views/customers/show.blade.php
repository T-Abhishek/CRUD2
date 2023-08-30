@extends('layouts.app')

@section('title','Details for'.$customer->name)


@section('content')

   
      <h4>Details for {{$customer->name }}</h4>
  
      <p><a href="{{ route('customers.edit', ['customer' => $customer])}}">Edit</a></p>

      <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>



    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $customer->name }}</p>
            <p><strong>Email</strong> {{ $customer->email }}</p>
            <!-- <p><strong>Status</strong> {{ $customer->active ? 'He is an Active user' : 'He is an Inactive user' }}</p> -->
            <p><strong>Company</strong> {{ $customer->company->name }}</p>
        </div>
    </div>
   


@endsection
    <!-- <p><a href="/customers/{{ $customer->id}}/edit">Edit</a></p> -->
    <!-- <form action="/customers/{{$customer->id}} " method="POST"> -->
