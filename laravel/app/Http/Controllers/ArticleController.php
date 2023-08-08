<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Encore\Admin\Controllers\AdminController;

class ArticleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['index', 'show']]);
        $this->middleware('auth')->except('index')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 設定預設值
        $marker = $request->marker == null ? 1 : $request->marker;
        $limit = $request->limit == null ? 10 : $request->limit;

        $query = Article::query();


        // 篩選欄位條件
        if (isset($request->filters)) {
            $filters = explode(',', $request->filters);
            foreach ($filters as $key => $filter) {
                list($criteria, $value) = explode(':', $filter);
                $query->where($criteria, $value);
            }
        }

        //排列順序
        if (isset($request->sort)) {
            $sorts = explode(',', $request->sort);
            foreach ($sorts as $key => $sort) {
                list($criteria, $value) = explode(':', $sort);
                if ($value == 'asc' || $value == 'desc') {
                    $query->orderBy($criteria, $value);
                }
            }
        } else {
            $query->orderBy('id', 'asc');
        }


        $articles = $query
            ->where('id', '>=', $marker)
            ->paginate($limit);

        return response($articles, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author_id' => 'required|integer',
            'category_id' => 'required|integer',
            'title' => 'required|max:128',
            'subtitle' => 'nullable|max:128',
            'cover' => 'required',
            'content' => 'required',
        ]);
        //Article Model 有 create 寫好的方法，把請求的內容，用all方法轉為陣列，傳入 create 方法中。
        $article = Article::create($request->all());
        return response($article, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //查詢文章
        if (!$article->exists()) {
            return response()->json(['message' => 'Article not found'], 404);
        }
        return response(new ArticleResource($article), Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //PUT|PATCH 更新文章
        $article->update($request->all());
        return response($article, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // 把這個實體物件刪除
        $article->delete();
        // 回傳 null 並且給予 204 狀態碼
        return response(null, Response::HTTP_NO_CONTENT);
    }
}