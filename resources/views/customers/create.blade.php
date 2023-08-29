@extends('layout')

@section('title','Add New Customer')


@section('content')

      <br>
      <br>
      <br>
      <h4>Add New Customer</h4>

    <form method="post" action="/customers">
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
   

      


@endsection
