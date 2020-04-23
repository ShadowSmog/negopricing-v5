@csrf
<article class="article-form">
    <div class="form-group">
        <label for="title">Titre de l'article:</label>
        <div>
            <input type="text" name="title" placeholder="Veuillez donner un titre à votre article."
                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $article->title }}">
            @error('title')
            <div class="invalid-feedback">Veuillez renseigner le champ.</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="categorie">Catégorie de l'article:</label>
        <div>
            <select class="special-form-elmt custom-select @error('category_id') is-invalid @enderror"
                name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="intro_text">Résumé de l'article:</label>
        <div>
            <textarea name="intro_text" id="" cols="30" rows="10"
                placeholder="Veuillez saisir un résumé de votre article."
                class="form-control form-control-message @error('intro_text') is-invalid @enderror"
                value="{{ old('intro_text') ?? $article->intro_text }}"></textarea>
            @error('intro_text')
            <div class="invalid-feedback">Veuillez renseigner le champ.</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="full_text">Contenu de l'article:</label>
        <div>
            <textarea name="full_text" id="" cols="30" rows="10"
                placeholder="Veuillez saisir le contenu de votre article."
                class="form-control form-control-message @error('full_text') is-invalid @enderror"
                value="{{ old('full_text') ?? $article->full_text }}"></textarea>
            @error('full_text')
            <div class="invalid-feedback">Veuillez renseigner le champ.</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="user">Auteur de l'article:</label>
        <div>
            <select class="special-form-elmt custom-select @error('user_id') is-invalid @enderror" name="user_id">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        {{-- <label for="image">Illustration de l'article:</label> --}}
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input @error('image')is-invalid @enderror" id="validatedCustomFile">
            <label class="custom-file-label special-form-elmt" for="validatedCustomFile">Sélectionnez une
                image...</label>
            @error('image')
            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
            @enderror
        </div>
    </div>
</article>
