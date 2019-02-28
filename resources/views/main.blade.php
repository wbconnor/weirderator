@extends('layouts.nav-layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div id="app">
        <div class="content">
            <thing-cards
                :user="{{ json_encode($user) }}"
                csrf_token="{{ csrf_token() }}"
            ></thing-cards>
        </div>
    </div>
</div>
@endsection
