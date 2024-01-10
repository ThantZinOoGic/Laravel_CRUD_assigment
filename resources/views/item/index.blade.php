@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <a href="{{ route('items.create') }}" class="btn btn-outline-success">Add +</a>
                    <table class="table m-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td scope="col">{{ $item->id }}</td>
                                <td scope="col">{{ $item->name }}</td>
                                <td scope="col">{{ $item->price }}</td>
                                <td scope="col">{{ $item->quantity }}</td>
                                <td scope="col">
                                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-outline-warning">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a href="{{ route('items.show', $item->id) }}" class="btn btn-outline-secondary">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <div class="d-inline-block">
                                        <form method="post" action="{{ route('items.destroy', $item->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-outline-danger">
                                                <i class="fas fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
