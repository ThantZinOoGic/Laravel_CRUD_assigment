@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table m-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>

                          </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td scope="col">{{ $fruit->id }}</td>
                                <td scope="col">{{ $fruit->name }}</td>
                                <td scope="col">{{ $fruit->quality }}</td>
                                <td scope="col">{{ $fruit->price }}</td>
                                <td scope="col">{{ $fruit->quantity }}</td>
                              </tr>

                        </tbody>
                      </table>

                      <a href="{{ route('fruits.index') }}" class="btn btn-outline-dark mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
