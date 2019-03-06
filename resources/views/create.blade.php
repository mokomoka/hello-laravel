@extends('layouts.base')
@section('title')
New Message
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Message</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('message.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="contentInput">メッセージ</label>
                            <input type="text" class="form-control" id="messageInput" name="content">
                        </div>
                        <button type="submit" class="btn btn-primary">新規追加</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection