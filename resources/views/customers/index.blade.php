@extends('layout')
@section('title')
    My first project using laravel
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>
   <div class="row">
       <div class="col-12">
           <form action="customers" method="POST" >
       <label for="name">Name</label>
        <div class="form-group pb-2" value ="{{ old('name') }}">
            <input type="text" name="name" class="form-control">
            {{ $errors->first('name') }}   
        </div>

        <label for="email">Email</label>
        <div class="form-group pb-3" value="{{ old('email') }}">
            <input type="email" name="email" class="form-control">
            {{ $errors->first('email') }}
        </div>
        <div class="form-group">
            <label for="active">Status</label>
            <select name="active" id="active" class="form-control">
                <option value="" disabled>Select customer status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="company_id">Company</label>
            <select name="company_id" id="company_id" class="form-control">
                @foreach($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
        @csrf
    </form>

       </div>
   </div>
        <hr>
        
        <div class="row">
            <div class="col-6">
                <h3>Active Customer</h3> 
        <ul>
        @foreach ($activeCustomers as $activeCustomer)
        <li>{{ $activeCustomer->name }} <span class="text muted">  ({{ $activeCustomer->company->name }})</span></li>
        @endforeach
        </ul> 
            </div>
       
            <div class="col-6">
                <h3>Inctive Customer</h3>
            <ul>
            @foreach ($inactiveCustomers as $inactiveCustomer)
            <li>{{ $inactiveCustomer->name }} <span class="text muted">({{ $inactiveCustomer->company->name }})</span></li>
            @endforeach
            </ul> 
            </div>
                 <div class="row">
            <div class="col-12">
            @foreach ($companies as $Company)
            <h3>{{ $Company->name }}</h3>
            <ul>
            @endforeach
            @foreach ($Company->customers as $customer)
            <li>{{ $customer->name }}</li>
            @endforeach
            </ul> 
            </div>
          </div>
    
              
@endsection
 