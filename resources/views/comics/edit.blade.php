@extends('layouts.default')

@section('pageTitle', 'Edit')

@section('content')

    <h1 class="my-4 text-center">Edit Comic #{{$comic->id}}</h1>

    <div class="container my-5">
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Title *</label>
                        <input type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               placeholder="Enter Title"
                               value="{{ $comic->title }}"
                        >
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Series *</label>
                        <input type="text"
                               class="form-control @error('series') is-invalid @enderror"
                               name="series"
                               placeholder="Enter Series"
                               value="{{ $comic->series }}"
                        >
                        @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Type</label>
                        <input type="text"
                               class="form-control @error('type') is-invalid @enderror"
                               name="type"
                               placeholder="Enter Type"
                               value="{{ $comic->type }}"
                        >
                        @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Sale Date *</label>
                        <input type="date"
                               class="form-control @error('sale_date') is-invalid @enderror"
                               name="sale_date"
                               value="{{ $comic->sale_date }}"
                        >
                        @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Price *</label>
                        <input type="number"
                               step="any"
                               class="form-control @error('price') is-invalid @enderror"
                               name="price"
                               placeholder="Enter Price"
                               value="{{ $comic->price }}"
                        >
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Url</label>
                        <input type="url"
                               class="form-control @error('thumb') is-invalid @enderror"
                               name="thumb"
                               placeholder="Enter Url"
                               value="{{ $comic->thumb }}"
                        >
                        @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>




            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Description</label>
                <textarea type="text"
                          class="form-control @error('description') is-invalid @enderror"
                          name="description"
                          placeholder="Enter Url"
                >{{ $comic->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
