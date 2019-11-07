@extends('layout')
@section('title', 'Add New Customer')
    My first project using laravel
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
            <p><a href="customers/create">Add New Customer</a></p>
        </div>
    </div>
   <div class="row">
       <div class="col-12">
           <form action="/customer" method="POST" >
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
@endsection
 