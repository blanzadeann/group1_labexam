<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
{
    $query = Article::query();

    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }

    return response()->json($query->get());
}
}
