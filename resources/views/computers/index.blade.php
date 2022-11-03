@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>computers</h1>
    </div>
    <!-- rendering computers data -->
    <div class="mt-9">
        @if (count($computers)>0)
        <ul>
            @foreach($computers as $computers)
            <a href="{{ route('computers.show', ['computer' => $computers['id']])}}">

            <li>{{$computers['name']}} is from {{$computers['origin']}} - {{$computers['price']}} $</li>
            </a>
            
            @endforeach
        </ul>
        @else 
        <p>there no computers avilable</p>
        @endif
    </div>
</div>

@endsection