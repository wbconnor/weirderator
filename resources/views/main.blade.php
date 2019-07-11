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
        <thing-cards
            :user="{{ json_encode($user) }}"
            csrf_token="{{ csrf_token() }}"
        ></thing-cards>
    </div>
</div>
@endsection
