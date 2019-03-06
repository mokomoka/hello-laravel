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
                <div class="card-body row">
                    <div class="col-sm-8">
                        <p class="card-text">{{ $message->id }}</p>
                        <h4 class="card-title">{{ $message->content }}</h4>
                        <h6 class="card-subtitle text-muted">{{ $message->updated_at }}</h6>
                    </div>
                    <div class="col-sm-4 row justify-content-center">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary" onclick="location.href='/message/edit/{{ $message->id }}'">編集</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-danger" onclick="location.href='/message/delete/{{ $message->id }}'">削除</button>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection