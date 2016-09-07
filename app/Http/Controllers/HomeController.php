<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
    	app()->setLocale(\LaravelLocalization::getCurrentLocale());
    	$article = Article::translatedIn(\LaravelLocalization::getCurrentLocale())->withTranslation()->get();
     	
    	dd($article);

    	return view('welcome', compact('article'));
    }
}
