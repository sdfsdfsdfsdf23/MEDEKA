<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'name' => 'Creep(ближник)',
            'description' => 'сногшибательный мужик',
            'nameSpell' => 'Doom',
            'descriptionSpell' => 'не дает использовать spells',
            'nameGame' => 'Dota 2(Defense of the Ancient 2)',
            'descriptionGame' => 'не играйте в доту пацаны...',
            'situation' => 'Произошел один случай...',
            'descriptionSituation' => 'Мама наругала ни за что...',
        ]);
    }
}
