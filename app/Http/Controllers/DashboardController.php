<?php

namespace App\Http\Controllers;

use App\Repositories\BookmarkRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $bookmarkRepository = new BookmarkRepository();
        $bookmarks = $bookmarkRepository->all();
        return view('dashboard', [
            'bookmarks' => $bookmarks,
        ]);
    }
}
