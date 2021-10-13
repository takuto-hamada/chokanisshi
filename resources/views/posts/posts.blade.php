@if (count($posts) > 0)
    <ul class="list-unstyled">
        @foreach ($posts as $post)
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
                    <div>
                        @if (Auth::id() == $post->user_id)
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
@endif