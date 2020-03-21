<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Theory by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

</head>
<body>

<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="/" class="logo">Theory</a>
        <nav id="nav">
            <a class="{{Request::path() === '/' ? 'current_page_item': ""}}" href="/">Home</a>
            <a class="{{Request::path() === 'articles' ? 'current_page_item': ""}}" href="/articles">Articles</a>
            <a class="{{Request::path() === 'generic' ? 'current_page_item': ""}}" href="/generic">Generic</a>
            <a class="{{Request::path() === 'elements' ? 'current_page_item': ""}}" href="/elements">Elements</a>
        </nav>
        <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
</header>
<!-- Banner -->
<section id="banner">
    <h1>Welcome to Theory</h1>
    <p>A free responsive HTML5 website template by TEMPLATED.</p>
</section>

@yield('content')

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="flex">
            <div class="copyright">
                &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
            </div>
            <ul class="icons">
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
                <li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
                <li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
