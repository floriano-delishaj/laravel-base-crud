@extends('layouts.default')

@section('pageTitle', 'Create')

@section('content')
<div class="container my-5">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="form-group my-3">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" >
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Series</label>
            <input type="text" class="form-control" name="series" placeholder="Enter Series">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Enter Type">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Sale Date</label>
            <input type="date" class="form-control" name="sale_date">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter Price">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Url</label>
            <input type="url" class="form-control" name="thumb" placeholder="Enter Url">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" class="form-control" name="description" placeholder="Enter Url"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
