<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiTokenRequest;
use App\Models\PersonalAccessToken;
use Illuminate\Support\Facades\Auth;
use Ramsey\Collection\Collection;

class ApiTokenController extends Controller
{
    public function __invoke(ApiTokenRequest $request)
    {
        /** @var Collection $tokens */
        $tokens = PersonalAccessToken::where('tokenable_id', Auth::id())->get();

        return view('pages.settings.api_token', [
            'tokens' => $tokens->toArray(),
            'plainTextToken' => session('plainTextToken')
        ]);
    }
}
