@extends('layouts.layout')

@section('nav')
<navbar
    :user="{{ json_encode($user) }}"
    csrf_token="{{ csrf_token() }}"
></navbar>
@endsection

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Post a new Thing and find out if it\'s weird!') }}
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/thing/new">
                                @csrf
                                <div class="row justify-content-center my-2">
                                    <textarea name="title" class="form-control col-10" rows="5" cols="50"></textarea>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}"></input>
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Post the Thing') }}
                                    </button>
                                </div>
                            </form>
                        </div>  
                    </div> <!-- card -->
                </div>  <!-- col -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- content -->
</div>
@endsection
