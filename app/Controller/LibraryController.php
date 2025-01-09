<?php

namespace Controller;

use Model\UserBook;
use Src\Request;
use Model\Book;
use Src\View;
use Model\User;
use Src\Auth\Auth;

class LibraryController
{
//    public function index(Request $request): string
//    {
//        $books = Book::all();
//        $users = User::all();
//        $userBooks = UserBook::all();
//        return (new View())->render('site.viewUserBooks', ['userBooks' => $userBooks,'users'=> $users,'books' => $books]);
//    }
    public function index(Request $request): string
    {
        // Получаем все записи UserBook с подгруженными пользователями и книгами
        $userBooks = UserBook::with(['user', 'books'])->get();

        return (new View())->render('site.viewUserBooks', ['userBooks' => $userBooks]);
    }
    public function signupReader(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/login');
        }
        return new View('site.libraryUser');
    }
    public function createBook(Request $request): string
    {
        if ($request->method === 'POST' && Book::create($request->all())) {
            app()->route->redirect('/login');
        }
        return new View('site.createBooks');
    }
    public function userBooks(Request $request): string
    {
        $users = User::all();
        $books = Book::all();
        if ($request->method === 'POST' && UserBook::create($request->all())) {
            app()->route->redirect('/hello');
        }

        return new View('site.userBooks', ['users' => $users, 'books' => $books]);
    }

}
