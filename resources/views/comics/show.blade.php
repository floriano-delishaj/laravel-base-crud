@extends('layouts.default')

@section('pageTitle', $comic['title'])


@section('content')

    @include('components.jumbotron')

    <section class="details">
        <div class="blue-bar">
            <div class="container">
                <div class="card-img">
                    <div class="img-info">comic book</div>
                    <img src="{{$comic['thumb']}}" alt="">
                    <div class="img-info">view gallery</div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 info-comic pt-4">
                    <h3 class="pb-3">{{$comic['title']}}</h3>
                    <div class="check-bar d-flex">
                        <div class="price d-flex align-items-center justify-content-between">
                            <span class="text-gray">U.S. Price: <span class="text-white"> {{$comic['price']}}</span></span>
                            <span class="text-gray">available</span>
                        </div>
                        <div class="check d-flex align-items-center justify-content-center">
                            <span class="text-white">check availability</span>
                        </div>
                    </div>

                    <p class="pt-3">{{$comic['description']}}</p>
                </div>

                <div class="col-12 col-lg-6 pt-4">
                    <div class="w-50 text-end">
                        <h5>ADVERTISEMENT</h5>
                        <img src="/img/adv.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <a class="btn btn-primary px-4 me-3" href="{{route('comics.edit', $comic->id)}}">Edit</a>

                <!-- Button trigger modal -->
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reg-modal">
                    Delete
                </button>
               <form  action="{{route('comics.destroy', $comic->id)}}" method="post" id="form_delete">
                    @csrf
                    @method('delete')
                        <!-- Modal -->
                        <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-title">Delete comic #{{$comic->id}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete comic  <b>#{{$comic->id}}</b> ? You will not be able to go back
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </form>
            </div>

        </div>
        <hr />
        <div class="container d-flex justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><h3 class="fw-bold">Specs</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="w-25">Series:</th>
                    <td><span class="text-uppercase">{{$comic['series']}}</span></td>
                </tr>
                <tr>
                    <th scope="row" class="w-25">U.S. Price:</th>
                    <td>{{$comic['price']}}</td>
                </tr>
                <tr>
                    <th scope="row" class="w-25">On Sale Date:</th>
                    <td>{{$comic['sale_date']}}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </section>
@endsection
