<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Word;

class TypingController extends Controller
{
    public function index(User $user, Word $word)
    {
        return view('typings.index')->with([
            'users' => $user->get(),
            'words' => $word->get()
        ]);
    }
    
    public function practice(Word $word)
    {
        $words = $word->get();
        //$meanings = $word->select('meaning')->get();
        return view('typings.practice')->with([
            'words' => $words,
            //'meanings' => $meanings
        ]);
    }
    
    public function test(Word $word)
    {
        $words = $word->select('english_word')->get();
        $meanings = $word->select('meaning')->get();
        return view('typings.test')->with([
            'words' => $words,
            'meanings' => $meanings,
        ]);
    }
}
