@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>釣果日誌</h1>
        
        {!! link_to_route('signup.get', 'アカウントをお持ちでない方はこちら', [], ['class' => 'btn btn-lg btn-dark']) !!}
    </div>
@endsection