@extends('layout')

@section('title')
Редактор страниц
@endsection

@section('content')

<body>
  @foreach($pages as $page)
  <h1>{{ $page->title }}</h1>
  <a href="/s/{{$page->urlname}}">{{ $page->title }}</a>
  @endforeach
  <h2>Создание страницы</h2><br>
  <div class="static-form">
    <form method="POST" action="/create_static_page" enctype="multipart/form-data">
      @csrf
      
      <!--<div id="editor"></div>-->
      <textarea id="editor" name="content"></textarea>
      <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
      <script>
        ClassicEditor
          .create(document.querySelector('#editor'))
          .catch(error => {
            console.error(error);
          });
      </script>

      <input type="text" placeholder="название страницы" name="page_name" required>
      <input type="submit" value="Создать">
    </form>
  </div>
</body>
@endsection