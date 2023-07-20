<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){

        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
