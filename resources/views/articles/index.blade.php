@extends('layout')
@section('articles')
<section class="articles-resume">
  <h1 class="articles-resume-title">
    Toute l'actualité de Negopricing
  </h1>
  <a href="articles/create" class="btn btn-secondary my-5 article-create-btn">Créer un nouvel article</a>

  @include('includes.category_nav')

  <article>
    @foreach($articles as $article)
    <div class="article-resume my-5" data-aos="fade" data-aos-duration="1000">
      @if ($article->image)
      <img src="{{ asset('storage/' . $article->image) }}" alt="illustration image of an article"
        class="img-fluid article-resume-illu">
      @endif
      <div class="article-resume-content" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="article-resume-title">{{ $article->title }}</h2>
        <h3 class="article-resume-category" data-aos="fade-right" data-aos-duration="1500">Catégorie : {{ $article->category->title}}</h3>
        <div class="article-resume-description">
          <p class="article-resume-intro">{{ $article->intro_text }}</p>
          <hr>
          <dl>
            <dt class="article-resume-date-creation">Crée le :</dt>
            <dd>
              {{ $article->created_at }}
            </dd>
            <dt class="article-resume-date-creation">Mis à jour le :</dt>
            </dd>
            {{ $article->updated_at }}
            </dd>
            <dt class="article-resume-author">Auteur :</dt>
            <dd>
              {{ $article->user->name }}
            </dd>
          </dl>
        </div>
        <a href="/articles/{{ $article->id }}" class="btn btn-secondary btn-show-article">Lire l'article <img class="btn-logo" src="../../img/logos/png/look-logo.png" alt=""></a>
      </div>
    </div>
    @endforeach
    {{ $articles->links('vendor.pagination.bootstrap-4') }}
  </article>
</section>
@endsection