@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('fruits.update', $fruit->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group row mb-3">
                          <label class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ $fruit->name }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">Quality</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('quality') is-invalid @enderror" placeholder="Quality" name="quality" value="{{ $fruit->quality }}">
                              @error('quality')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price" value="{{ $fruit->price }}">
                              @error('price')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" name="quantity" value="{{ $fruit->quantity }}">
                              @error('quantity')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('fruits.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
