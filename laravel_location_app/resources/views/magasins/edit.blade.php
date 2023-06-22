@extends('layouts.app')
@section('content')
<div class="container-form d-flex justify-content-center align-items-center">
  <form action="{{route('magasins.update',$magasin->id)}}" method="POST" style="width: 550px" class="p-2 text-center">
    @csrf
    @method('PUT')
    <h1>Update magasin</h1>
    <input type="text" class="form-control" placeholder="surface" name="surface" value="{{$magasin->surface}}"><br>
    @error('surface')
       {{$message}}
    @enderror
    <input type="text" class="form-control" placeholder="loyer mensuel" name="loyer_mensuel" value="{{$magasin->loyer_mensuel}}">
    @error('loyer_mensuel')
       {{$message}}
    @enderror

    <button class="btn btn-secondary text-white mt-4" role="submit">Update Magasin</button>
 </form>
</div>
@endsection
