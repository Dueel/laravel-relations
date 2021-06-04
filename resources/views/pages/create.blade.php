@extends('layouts.main-layout')

@section('main')
<main>
    
    <form action="{{ route('storeCar') }}" method="post">
    
        @csrf
        @method('POST')

        <div class="input-form">
            <label for="name">Name</label>
            <input type="name" name="name" id="name">
        </div>
        
        <div class="input-form">
            <label for="model">Model</label>
            <input type="model" name="model" id="model">
        </div>
        
        <div class="input-form">
            <label for="kW">kW</label>
            <input type="kW" name="kW" id="kW">
        </div>

        <label for="brand_id">Brand</label>
        <select name="brand_id" id="brand_id">
            <option selected="selected">Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand -> id }}">{{ ucfirst($brand -> name) }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
        
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
</main>
@endsection