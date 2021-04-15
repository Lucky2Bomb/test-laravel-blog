<div class="btn-group" role="group">
    @foreach ($categories as $category)
        <a type="button" href={{ route('getPostsByCategory', $category['slug']) }} class="btn btn-dark">{{$category->title}}</a>
    @endforeach
</div>