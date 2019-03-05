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
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
                <script src="{{ asset('js/message.js') }}" defer></script> -->
                <div id="rndm" class="card-body">
                    <button type="button" class="btn btn-primary">
                        Push me!
                    </button>
                    <!-- <p>@{{ message }}</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection