@extends('layout')
@section('article_show')
<section class="article">
    <div class="article-content">
        <h2 class="article-title">{{ $article->title }}</h2>
        <h3 class="article-category">Catégorie : {{ $article->category->title}}</h3>
        @if ($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" alt="illustration image of an article" class="img-fluid article-illustration">
        @endif
        <p class="article-text">{{ $article->full_text }}</p>
        <hr>
        <div class="article-informations">
                <dl>
                        <dt class="article-date-creation">Crée le :</dt>
                        <dd>
                          {{ $article->created_at }}
                        </dd>
                        <dt class="article-date-creation">Mis à jour le :</dt>
                        </dd>
                        {{ $article->updated_at }}
                        </dd>
                        <dt class="article-author">Auteur :</dt>
                        <dd>
                          {{ $article->user->name }}
                        </dd>
                      </dl>
        </div>
        <div class="article-btn-grp">
            <a href="/articles/{{ $article->id }}/edit" class="btn btn-success btn-article btn-edit-article">Editer l'article <img class="btn-logo" src="../../img/logos/png/edit-logo.png" alt=""></a>
            <form action="/articles/ {{ $article->id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-article btn-delete-article">Supprimer l'article <img class="btn-logo" src="../../img/logos/png/trash-logo.png" alt=""></button>
        </div>
    </div>
</section>
@endsection