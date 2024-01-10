@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <a href="{{ route('items.index') }}" class="btn btn-outline-success">Back</a>
                    <table class="table m-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">{{ $item->id }}</td>
                                <td scope="col">{{ $item->name }}</td>
                                <td scope="col">{{ $item->price }}</td>
                                <td scope="col">{{ $item->quantity }}</td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
