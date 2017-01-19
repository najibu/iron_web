@extends('layouts.master')
@section('title', 'Answer')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                {!! csrf_field() !!}
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status')) 
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <fieldset>
                    <legend>Post an answer</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="answer" class="col-lg-2 control-label">Answer</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="answer" name="answer"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label">Rating</label>
                        <div class="col-lg-10">
                            <div class="rating-wrapper">
                              <input type="radio" class="rating-input" id="rating-5" name="rating" />
                              <label for="rating-5" class="rating-star"></label>
                              <input type="radio" class="rating-input" id="rating-4" name="rating" />
                              <label for="rating-4" class="rating-star"></label>
                              <input type="radio" class="rating-input" id="rating-3" name="rating" />
                              <label for="rating-3" class="rating-star"></label>
                              <input type="radio" class="rating-input" id="rating-2" name="rating" />
                              <label for="rating-2" class="rating-star"></label>
                              <input type="radio" class="rating-input" id="rating-1" name="rating" />
                              <label for="rating-1" class="rating-star"></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-warning">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection