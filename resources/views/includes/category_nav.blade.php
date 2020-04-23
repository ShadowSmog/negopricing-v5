<nav class="articles-category-nav my-5">
    <div class="category-nav-item">
      @foreach($categories as $category)
      <a href="/category/{{ $category->id }}/articles" class="category-item">{{ $category->title}}</a>
      @endforeach
    </div>
  </nav>