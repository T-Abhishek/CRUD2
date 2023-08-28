@extends('layout')

@section('title','Customers List')


@section('content')

      <br>
      <br>
      <br>
      <h4>Customers List</h4>

    <form method="post" action="customers">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Enter name" >
        <div>{{$errors->first('name')}}</div>
        
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}"  placeholder="Enter Email">
        <div>{{$errors->first('email')}}</div>

          <div class="form-group">
            <label for="my-select"></label>
            <select id="active" class="form-control" name="active">
            <option value="" disabled>Select option</option>
              <option value="1">active</option>
              <option value="0">inactive</option>

            </select>
          </div>
          <div class="form-group">
            <label for="company_id">Company</label>
            <select id="company_id" class="form-control" name="company_id">
            <option value="" disabled>Select option</option>
              @foreach($companies as $company)
              <option value="{{$company->id}}">{{$company->name}}</option>
              @endforeach
            </select>
          </div>
        
        
          
          <button type="submit" class="btn btn-primary">Submit</button>

        @csrf
      </div>
      
    </form>
  <hr>
   

  <div class="row">
    <div class="col-6">
    <h3>Active Customers</h3>
    <ul >
      
        @foreach($activeCustomer as $act)
            <li class="">{{$act->name}} <span class="text-muted">({{$act->company->name}}) </span></li>
        @endforeach
    </ul></div>
    <div class="col-6">
    <h3>Inactive Customers</h3>
    
    <ul >
        @foreach($inactiveCustomer as $inact)
            <li class="">{{$inact->name}} <span class="text-muted">({{$inact->company->name}}) </span></li>
        @endforeach
    </ul>
    </div>
  </div>
  

  <div class="row">
    <div class="col-12">
   
    <ul >
      
        @foreach($companies as $company)
        <h3>{{$company->name}} </h3>
           <ul>
           @foreach($company->customers as $cust)
            <li class=""> {{$cust->name}}  </li>
        @endforeach
           </ul>
        @endforeach
    </ul>
  </div>

    
    
    </div>
      


@endsection
