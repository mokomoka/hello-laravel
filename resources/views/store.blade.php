@extends('layouts.base')
@section('title')
Success
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Success!</div>
                <div class="card-body">
                    <p>メッセージが追加されました！</p>
                    <button type="button" class="btn btn-primary" onclick="location.href='/messages'">トップに戻る</button>
                    <button type="button" class="btn btn-default" onclick="location.href='/messages/new'">もう一つ追加する</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection