@extends('layouts.main-layout')

@section('title',(isset($categoryTitle) ? $categoryTitle : 'blog'))

@section('content')
    <h1>
        {{isset($categoryTitle) ? $categoryTitle : 'Hello, Blog!'}}
    </h1>
    
    @include('includes.categories')

    @foreach ($posts as $post)
        <div class="card mb-3 mt-3">
            <div class="card-header">
                <a href={{ route('getPostsByCategory', $post->category['slug']) }}>{{$post->category['title']}}</a>
            </div>
            
            <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{$post->description}}</p>
                <a type="button" class="btn btn-info" href={{route('getPost', [$post->category['slug'], $post->slug])}}>more...</a>
            </div>
        </div>
    @endforeach

    {{$posts->links('pagination::bootstrap-4')}}
    
@endsection