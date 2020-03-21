@extends('layout')
@section('content')
    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner text-center">
            <div class="flex flex-3">
                    <article>
                        <header>
                            <h3>{{$article->title}}</h3>
                        </header>
                        <h6>{{$article->excerpt}}</h6>
                        <p>{{$article->body}}</p>
                        Tags:
                        @foreach($article->tags as $tag)
                            <a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
                        @endforeach
                    </article>
            </div>
        </div>
    </section>
@endsection('content')
