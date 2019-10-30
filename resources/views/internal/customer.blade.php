@extends('layout')

@section('content')
    <h1>Customers</h1>
    <form action="customer" method="POST" class="pb-3">
    	<div class="input-group">
    		<input type="text" name="name">
    	</div>
    	<button type="submit">Add Customer</button>
        @csrf
    </form>

        <ul>
       	
        @foreach ($Customer as $customer)
        <li>{{ $customer->name }}</li>
        @endforeach
        </ul> 
              
@endsection

