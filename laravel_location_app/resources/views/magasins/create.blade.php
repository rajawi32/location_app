@extends('layouts.app')
@section('content')
<div class="container-form d-flex justify-content-center align-items-center">
  <form action="{{route('magasins.store')}}" method="POST" style="width: 550px" class="p-2 text-center">
    @csrf
    <h1>create magasin</h1>
    <input type="text" class="form-control" placeholder="surface" name="surface" value="{{old('surface')}}"><br>
    @error('surface')
       {{$message}}
    @enderror
    <input type="text" class="form-control" placeholder="loyer mensuel" name="loyer_mensuel" value="{{old('loyer_mensuel')}}">
    @error('loyer_mensuel')
       {{$message}}
    @enderror

    <button class="btn btn-secondary text-white mt-4" role="submit">Ajouter Magasin</button>
 </form>
</div>
@endsection
