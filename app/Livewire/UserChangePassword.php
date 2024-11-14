<?php

namespace App\Livewire;

use App\Livewire\Forms\ChangePasswordForm;
use Illuminate\View\View;
use Livewire\Component;

class UserChangePassword extends Component
{
    public ChangePasswordForm $form;

    public function changePassword(): void
    {
        $this->form->save();

        $this->redirectRoute('profile', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.user-change-password');
    }
}
