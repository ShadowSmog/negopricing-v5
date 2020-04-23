@extends('layout')
@section('articles_edit')
<section class="article-edit">
    <h1 class="article-edit-title">Éditer un article</h1>
    <h2 class="article-edit-title-target">Vous êtes sur le point de modifier l'article :<br/><strong>"{{ $article->title }}"</strong></h2>
    <form action="/articles/{{ $article->id }}" method="POST" enctype='multipart/form-data'>
        @method('PATCH')
        @include('includes.article_form')
        <button type="submit" class="btn btn-secondary btn-prospects ">Mettre à jour l'article</button>
    </form>
</section>
@endsection