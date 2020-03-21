@extends('layout')
@section('content')
    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner text-center">
            <a href="/articles/create" class="button special">Create New</a>
            <div class="flex flex-3">
                    @forelse($articles as $article)
                        <article>
                            <header>
                                <a href="{{route('articles.show', $article)}}"><h3>{{$article->title}}</h3></a>
                            </header>
                            <h6>{{$article->excerpt}}</h6>
                            <p>{{$article->body}}</p>
                            <footer>

                            </footer>
                            <a href="/articles/{{$article->id}}/edit" class="button special">Edit</a>

                        </article>
                    @empty
                        <p>No relevent article yet</p>
                    @endforelse
            </div>
        </div>
    </section>
@endsection('content')
