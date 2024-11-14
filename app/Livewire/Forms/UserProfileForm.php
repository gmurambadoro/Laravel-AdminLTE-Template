<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class UserProfileForm extends Form
{
    public ?string $name = '';

    public ?string $email = '';

    public function save(): void
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . \Auth::id(),
        ]);

        $user = \Auth::user();

        $user->name = $this->name;
        $user->email = $this->email;

        $user->save();
    }
}
