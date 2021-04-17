@extends('layouts.main-layout')

@section('title', 'new post')

@section('content')
<h1 class="mb-4 mt-4">New post</h1>

<form action="" method="post">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Category</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="category_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="input-group mb-3">
        <input name="title" type="text" class="form-control" placeholder="title" aria-label="title"
            aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input name="description" type="text" class="form-control" placeholder="description" aria-label="description"
            aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
        <textarea name="text" class="form-control" placeholder="text..." aria-label="text"></textarea>
    </div>

    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary">send</button>
    </div>
</form>
@endsection