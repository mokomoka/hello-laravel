@extends('layouts.base')
@section('title')
Show Message
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Message</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('message.delete') }}">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="id" value="{{ $message->id }}">
                        <div class="form-group">
                            <label for="contentInput">メッセージ</label>
                            <input type="text" readonly class="form-control" id="messageInput" name="content" value="{{ $message->content }}">
                        </div>
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection