<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boolpress @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav>
    <div class="navbar">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('article.index') }}">Articles</a>
      <a href="{{ route('articleList_api') }}">Articles API</a>
      <a href="{{ route('categoryList_api') }}">Category API</a>
      <a href="{{ route('tagList_api') }}">Tag API</a>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>