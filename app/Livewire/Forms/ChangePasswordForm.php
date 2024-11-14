<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ChangePasswordForm extends Form
{
    #[Validate('required|current_password')]
    public string $currentPassword = '';

    #[Rule('required|min:5|max:255|confirmed')]
    public string $password = '';

    public function save(): void
    {
        $this->validate();

        $user = \Auth::user();

        $user->password = \Hash::make($this->password);

        // todo: Emit password changed event

        session()->flash('message', 'Password Changed Successfully');

        $user->save();
    }
}
