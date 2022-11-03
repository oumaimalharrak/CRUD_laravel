@extends('layout')
@section('title', 'show computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>computers</h1>
    </div>
    <!-- rendering computers data -->
    <div class="mt-8">
        
       <h3><strong>{{$computer['name']}}</strong> is from <strong>{{$computer['origin']}}</strong> - {{$computer['price']}} $</h3>
      
       
    </div>
</div>

@endsection