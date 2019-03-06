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
                <div id="rndm" class="card-body">
                    <!-- <button type="button" class="btn btn-primary" v-on:click="messageRandom" v-bind:value="message"> -->
                    <button type="button" class="btn btn-primary">
                        Push me!
                    </button>
                    <!-- <p>@{{ message.content }}</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection