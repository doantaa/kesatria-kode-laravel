@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>Create Product</h2>
                        <hr>
                        <a href="{{ route('product.index') }}"><div class="btn btn-primary">Kembali</div></a>

                        <form action="{{ route('product.store') }}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" class="form-control">
                                @error('stock')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" class="form-control"></textarea>

                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

            
                            <div class="d-grid gap-2 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block mt-3">Tambah</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection