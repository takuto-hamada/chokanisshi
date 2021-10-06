@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- ユーザ詳細タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">投稿一覧</a></li>
                {{-- フォロー一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">Followings</a></li>
                
            </ul>
        </div>
    </div>
@endsection