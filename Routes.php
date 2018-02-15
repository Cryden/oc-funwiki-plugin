<?php namespace Crydesign\FunWiki;

use Route;
use Crydesign\FunWiki\Models\Universe;
use Crydesign\FunWiki\Models\Book;

Route::get('/api', function () {
    $universes = Universe::all();
    //dd ($universe->cover->getPath());
    //$i = 0;
    foreach ($universes as $universe) {
        $u[$universe->title] = $universe;
        $u[$universe->title]['cover'] = $universe->cover;//->getPath();
        $u[$universe->title]['logo'] = $universe->logo;
       // $i++;
    }

    return $u;
});
