<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)//Allows to display all articles created
    {
        $articles = Article::latest()->paginate(4);
        $categories = Category::all();

        return view('articles.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        $article = new Article();

        return view('articles.create', compact('article', 'categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create($this->validator());

        $this->storeImage($article);

        return redirect('articles')->with('article-creation-confirmation','Félicitations! Vous venez de générer un nouvel article.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        $article = Article::where('id', $article)->firstOrFail();

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $users = User::all();

        return view('articles.edit', compact('article','categories' ,'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article)
    {
        $article->update($this->validator());

        $this->storeImage($article);

        return redirect('articles/' . $article->id)->with('article-update-confirmation','L\'article a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('articles')->with('article-delete-confirmation','L\'article a bien été supprimé.');
    }



    private function validator()
    {
        return request()->validate(
            [
                'title' => 'required',
                'category_id' => 'required',
                'intro_text' => 'required',
                'full_text' => 'required',
                'user_id' => 'required',
                'image' => 'sometimes|image|max:5000'
            ]
        );
    }




    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store','edit', 'update','destroy']);
    }



    private function storeImage(Article $article)
    {
        if (request('image'))
        {
            $article->update([
                'image' => request('image')->store('article_images', 'public'),
            ]);
        }
    }



    public function category($category)
    {
        $articles = Category::find($category)->articles;
        $category = Category::where('id', $category)->firstOrFail();
        // $articles = DB::table('articles')->where('category', $category)->get();
        $categories = Category::all();
        return view('categories.category', compact('articles', 'category', 'categories'));
    }
}
