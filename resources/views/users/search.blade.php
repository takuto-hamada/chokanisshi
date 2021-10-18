@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-4">
        <div>
            <h3 class="brown border p-2">投稿検索</h3>
        </div>
        {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                <div class="form">
                    {!! Form::label('content', 'キーワード:') !!}
                    {!! Form::text('content' ,'', ['class' => 'form-control', 'placeholder' => 'キーワードを入力'] ) !!}
                </div>
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-sm-8">
             <div>
                <h3 class="brown p-2">検索結果一覧</h3>
            </div>
            <div class="container">
            @if(!empty($data))
                @foreach($data as $post)
                <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {!! link_to_route('users.show', $post->user->name, ['user' => $post->user->id]) !!}
                        <span class="text-muted">posted at {{ $post->created_at }}</span>
                    </div>
                    <div>
                        <img src="{{asset('/storage/'.$post->image_path)}}">
                    </div>
                    <div>
                        <p class="mb-0">{!! nl2br(e($post->content)) !!}</p>
                    </div>
                    <div>
                        @include('posts.favorite_botton')
                    </div>
                </div>
                </li>
                @endforeach
            @endif
            </div>
    </div>
</div>
@endsection