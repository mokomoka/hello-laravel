@extends('layouts.base')
@section('title')
Random Button
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Button</div>
                <div id="randomM" class="card-body">
                    <button type="button" class="btn btn-primary" @click="messageRandom">
                        Push me!
                    </button>
                    <hr>
                    <p class="card-text">@{{ message['id'] }}</p>
                    <h4 class="card-title">@{{ message['content'] }}</h4>
                    <h6 class="card-subtitle text-muted">@{{ message['updated_at'] }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection