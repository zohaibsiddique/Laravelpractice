@extends('layout')
@section('content')




<!-- One -->
<section id="one" class="wrapper">
    <div class="inner text-center">
        <header>
            <h2>Articles</h2>
        </header>
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

<!-- Two -->
<section id="two" class="wrapper style1 special">
    <div class="inner">

        <div class="flex flex-4">
            <div class="box person">
                <div class="image round">
                    <img src="images/pic03.jpg" alt="Person 1" />
                </div>
                <h3>Magna</h3>
                <p>Cipdum dolor</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/pic04.jpg" alt="Person 2" />
                </div>
                <h3>Ipsum</h3>
                <p>Vestibulum comm</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/pic05.jpg" alt="Person 3" />
                </div>
                <h3>Tempus</h3>
                <p>Fusce pellentes</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/pic06.jpg" alt="Person 4" />
                </div>
                <h3>Dolore</h3>
                <p>Praesent placer</p>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper special">
    <div class="inner">
        <header class="align-center">
            <h2>Nunc Dignissim</h2>
            <p>Aliquam erat volutpat nam dui </p>
        </header>
        <div class="flex flex-2">
            <article>
                <div class="image fit">
                    <img src="images/pic01.jpg" alt="Pic 01" />
                </div>
                <header>
                    <h3>Praesent placerat magna</h3>
                </header>
                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
                <footer>
                    <a href="#" class="button special">More</a>
                </footer>
            </article>
            <article>
                <div class="image fit">
                    <img src="images/pic02.jpg" alt="Pic 02" />
                </div>
                <header>
                    <h3>Fusce pellentesque tempus</h3>
                </header>
                <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
                <footer>
                    <a href="#" class="button special">More</a>
                </footer>
            </article>
        </div>
    </div>
</section>

@endsection('content')
