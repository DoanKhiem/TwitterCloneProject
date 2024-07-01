@extends('layout.default')

@section('title', 'Terms')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum earum, laborum nam nobis porro reiciendis
                repudiandae unde. Accusamus adipisci amet assumenda commodi consectetur eum eveniet exercitationem, maiores
                mollitia natus quaerat quam rerum, sunt! Accusantium, atque corporis debitis delectus, eius est excepturi hic id
                numquam officia porro possimus quae voluptas voluptate?
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
