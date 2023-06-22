@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('magasins.create') }}" class="ajout-btn p-2">Ajouter Magasin</a>
    </div>
    @if ($count > 0)
        <table id="example" class="display nowrap table table-hover text-center border rounded shadow-1 mt-4">
            <thead>
                <tr class="table-warning">
                    <th>code</th>
                    <th>surface</th>
                    <th>loyer mensuel</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($magasins as $magasin)
                    <tr>
                        <td>{{ $magasin->id }}</td>
                        <td>{{ $magasin->surface }} m<sup>2</sup></td>
                        <td>{{ $magasin->loyer_mensuel }} dh</td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center align-items-center">
                                <a href="{{ route('magasins.edit', $magasin->id) }}">
                                    <i class="bi bi-pencil-square text-success"></i>
                                </a>
                                <form action="{{ route('magasins.destroy', $magasin->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button role="submit" class="btn border-0">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row bg-light pagination">
            {{ $magasins->links() }}

        </div>
    @else
        <p>en ce moment il n'a pas des magasins</p>
    @endif
@endsection
