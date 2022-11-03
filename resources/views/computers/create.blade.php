@extends('layout')
@section('title', 'create computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="mt-8">
        <h3>Create new computer</h3>
    </div>
    <div class="flex justify-center ">
        <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
            @csrf
            <div>
                <label for="computer-name">Computer name</label>
                <input type="text" id="computer-name" value="{{old('computer-name')}}" name="computer-name">
                @error('computer-name')
                <div class="form-error">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div>
                <label for="computer-origin">Computer origin</label>
                <input type="text" id="computer-origin" value="{{old('computer-origin')}}" name="computer-origin">
                @error('computer-origin')
                <div class="form-error">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div>
                <label for="computer-price">Computer price</label>
                <input type="text" id="computer-price" value="{{old('computer-price')}}" name="computer-price">
                @error('computer-price')
                <div class="form-error">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <!-- rendering computers data -->

</div>

@endsection