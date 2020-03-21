@extends('layout')
@section('content')
    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner text-center">
            <div class="flex flex-3">
               <h1>Create</h1>
                <form action="/articles/store" method="post">
                    @csrf
                    Title: <input type="text" name="title" value="{{old('title')}}">
                    <span class="text-danger">{{$errors->first('title')}}</span><br>
                    Excerpt: <input type="text" name="excerpt" value="{{old('excerpt')}}">
                    <span class="text-danger">{{$errors->first('excerpt')}}</span><br>
                    Body: <input type="text" name="body" value="{{old('body')}}">
                    <span class="text-danger">{{$errors->first('body')}}</span><br>
                    Tags:
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
