
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{old('name') ?? $customer->name}}" name="name" placeholder="Enter name" >
        <div>{{$errors->first('name')}}</div>
        
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{old('email') ?? $customer->email}}"  placeholder="Enter Email">
        <div>{{$errors->first('email')}}</div>

          <div class="form-group">
            <label for="my-select"></label>
            <select id="active" class="form-control" name="active">
            <!-- <option value="" disabled>Select option</option>
              <option value="1" {{ $customer->active == 'Active' ? 'selected' : '' }}>active</option>
              <option value="0" {{ $customer->active == 'Inactive' ? 'selected' : '' }}>inactive</option> -->
              @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
                    <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="company_id">Company</label>
            <select id="company_id" class="form-control" name="company_id">
            <option value="" disabled>Select option</option>
              @foreach($companies as $company)
              <option value="{{$company->id}}" {{ $company->id == $customer->company_id ? 'selected' : '' }}> 
                {{$company->name}}</option>
              @endforeach
            </select>
          </div>
        


        @csrf
      </div>