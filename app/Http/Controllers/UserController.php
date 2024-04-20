<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all();
        return view('admin.user.list',[
            'users' => $users
        ]);
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt('123');
        $user = new User();
        $user->fill($input);
        $user->save();
        return redirect()->route('admin.user.index');
    }

    public function edit(User $user): View|Factory|Application
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request): RedirectResponse
    {
        $input = $request->all();
        $user->fill($input);
        $user->save();
        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
