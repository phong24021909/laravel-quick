<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change($locale)
    {
        if (in_array($locale, ['en', 'vi'])) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}
