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
                              <input type="number" id="rating" class="form-control" min="0" max="5" name="rating" />
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