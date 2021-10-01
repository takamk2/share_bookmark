<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateApiTokenRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class CreateApiTokenController extends Controller
{
    /**
     * @param CreateApiTokenRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function __invoke(CreateApiTokenRequest $request)
    {
        $name = $request->get('name');

        /** @var User $user */
        $user = Auth::user();
        $token = $user->createToken($name);

        return  redirect('/settings/api-token')->with([
            'status' => 'success',
            'plainTextToken' => $token->plainTextToken
        ]);
    }
}
