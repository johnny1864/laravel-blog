@extends('layouts/app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <p><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
            <small>Written on {{$post->create_at}}</small>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection