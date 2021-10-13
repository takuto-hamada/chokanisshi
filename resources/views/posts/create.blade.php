@extends('layouts.app')

@section('content')

<h1>新規作成</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($post, ['route' => 'posts.store','files'=> true]) !!}
            
                <div class="form-group">
                    {!! Form::label('file', '画像投稿', ['class' => 'control-label']) !!}
                    {!! Form::file('file') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', '本文') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group text-center">
                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection