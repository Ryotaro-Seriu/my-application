<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Word;

class TypingController extends Controller
{
    public function index(User $user)
    {
        return view('typings.index')->with(['users' => $user->get()]);
    }
    
    public function practice(Word $word)
    {
        return view('typings.practice')->with(['words' => $word->get()]);
    }
}
