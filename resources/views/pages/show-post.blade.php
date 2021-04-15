@extends('layouts.main-layout')

@section('title', $post->title)

@section('content')
    <h1 class="mb-4 mt-4">{{$post->title}}</h1>
    
    @include('includes.categories')
    
    <div class="mb-2 mt-2">
        <a type="button" href={{route('getPostsByCategory', $slug_category)}} class="btn btn-primary">back</a>
    </div>
    
    <article>
        {!!$post->text!!}
    </article>
    
@endsection