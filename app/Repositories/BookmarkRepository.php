<?php

namespace App\Repositories;

use App\Models\Bookmark;
use Illuminate\Support\Collection;

class BookmarkRepository
{
    public function all(): Collection
    {
        return Bookmark::get();
    }
}
