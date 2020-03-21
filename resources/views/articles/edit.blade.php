@extends('layout')
@section('content')
    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner text-center">
            <div class="flex flex-3">
               <h1>Edit</h1>
                <form action="/articles/{{$article->id}}" method="post">
                    @csrf
                    @method('PUT')
                    Title: <input type="text" name="title" value="{{$article->title}}"><br>
                    Excerpt: <input type="text" name="excerpt" value="{{$article->excerpt}}"><br>
                    Body: <input type="text" name="body" value="{{$article->body}}"><br>
                    <select name="tags[]" class="selectpicker" multiple>
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tags')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input type="submit">
                </form>
            </div>
        </div>
    </section>
@endsection('content')
