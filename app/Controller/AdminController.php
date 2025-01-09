<?php

namespace Controller;

use Src\Request;
use Model\Post;
use Src\View;
use Model\User;
use Src\Auth\Auth;

class AdminController
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function signupLibrary(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.adminSignup');
    }
}