<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookmark;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AddBookmarkController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $title = $request->get('title', 'default title');
        $url = $request->get('url', 'http://localhost');
        $description = $request->get('description', 'default description');
        $userId = $request->user()->id;
        $bookmark = Bookmark::create([
            'title' => $title,
            'url' => $url,
            'description' => $description,
            'user_id' => $userId,
        ]);

        return response()->json(
            [
                'bookmark' => $bookmark,
            ]
        );
    }
}
