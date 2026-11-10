<?php

namespace App\Controllers;

class Usuarios extends BaseController
{
    public function create(): string
    {
        $user = auth()->user();

        if ($user === null || ! $user->can('users.create')) {
            return redirect()->back()->with('error', 'Acesso não autorizado.');
        }

        if ($user !== null && $user->inGroup('admin')) {
            // Executar a operação permitida para administradores.
        }
    }
}