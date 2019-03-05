@extends('layouts.base')
@section('title')
Message List
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Message List</div>
                @foreach ($messages as $message)  
                <div class="card-body">
                    <h4 class="card-title">{{ $message->id }}</h4>
                    <p class="card-text">{{ $message->content }}</p>
                    <h6 class="card-subtitle">{{ $message->updated_at }}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection