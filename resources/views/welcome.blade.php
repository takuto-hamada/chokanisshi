@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="col-sm-8">

                @include('posts.posts')
        </div>
    @else
        <div class="text-center">
            <h1>釣果日誌</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
            {!! link_to_route('signup.get', 'アカウントをお持ちでない方はこちら', [], ['class' => 'btn btn-lg btn-dark btn-block']) !!}
            
            {!! link_to_route('login','ログイン',[],['class' => 'btn btn-lg btn-dark btn-block']) !!}
            </div>
        </div>
    @endif
@endsection