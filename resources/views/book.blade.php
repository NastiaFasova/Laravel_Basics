@extends('layouts.app')

@section('title')Book @endsection

@section('page')
    <h1 style="text-align: center; margin: 50px 0">Book page</h1>

    <div class="container">
        <div class="pb-5 text-center">
            <h2>Form</h2>
            <p class="lead">This is just a form</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" method="post" action="{{ route('create') }}" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="author">Year</label>
                            <input type="text" class="form-control" id="year" name="year" placeholder="" value="" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="title" name='title' placeholder="title" >
                        </div>
                    </div>
                    @include('layouts.alerts')
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection
