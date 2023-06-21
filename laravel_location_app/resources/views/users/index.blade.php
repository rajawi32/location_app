@extends('layouts.app')

@section('content')
<div class="user-container">
    <div class="d-flex justify-content-between align-items-center">
        <form action="{{ route('users.index') }}" method="GET" class="search-box">
            <input type="search" name="search" class="form-control mt-3 mb-3" value="{{ request('search') }}" />
            <button class="btn" type="submit">Search</button>
        </form>
    </div>
    @if ($count > 0)
    <div class="users-cards d-flex justify-content-start align-items-center gap-4">
       @foreach ($users as $user)
       <div class="card" style="width: 18rem;">
        <i class="bi bi-person-circle text-center fs-1"></i>
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">{{$user->email}}</p>
        </div>
        <div class="card-footer">
            <form action="{{route('users.destroy',$user->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button role="submit" class="btn btn-danger" onclick="return confirm('est ce que tu peux supprimer ce utilisateur')">delete</button>
            </form>
        </div>
       </div>
    @endforeach
   </div>
    @else
        <p>Il N'a Pas des donnees</p>
    @endif
</div>
@endsection
