@extends('layout')
@section('articles_create')
<section class="article-create">
    <h1 class="article-create-title">Création d'un article</h1>
    <form action="{{ action('ArticleController@store') }}" method="POST" enctype='multipart/form-data'>
        @include('includes.article_form')
        <button type="submit" class="btn btn-secondary btn-prospects">Poster l'article</button>
    </form>
</section>
@endsection