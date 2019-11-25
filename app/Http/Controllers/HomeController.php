<?php

namespace App\Http\Controllers;

use App\Entities\Book;
use App\Entities\Plan;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function wallet()
    {
        $plans = Plan::all();

        return view('users.wallet', compact('plans'));
    }

    public function wallet_buy($id)
    {
        $plan = Plan::findOrFail($id);

        Auth::user()->wallet->update(['credits' => Auth::user()->wallet->credits + $plan->credits]);

        return back();
    }

    public function library()
    {
        $books = Auth::user()->books;

        return view('users.library', compact('books'));
    }

    public function book_buy($id)
    {
        $book = Book::findOrFail($id);

        if (Auth::user()->books()->find($book->id)) {
            session()->flash('danger', "You already have the book in your library, <a href='" . route('library.index') . "'>see library.</a>");
            return back();
        }

        if (!Auth::user()->haveMoney($book->price)) {
            session()->flash('danger', "You don't have enough credits to buy the book, <a href='" . route('wallet.index') . "'>get more credits.</a>");
            return back();
        }

        Auth::user()->books()->attach($book->id);

        Auth::user()->wallet->update(['credits' => Auth::user()->wallet->credits - $book->price]);

        return redirect()->route('library.index');
    }
}
