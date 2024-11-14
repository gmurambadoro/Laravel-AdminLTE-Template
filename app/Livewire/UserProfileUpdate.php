<?php

namespace App\Livewire;

use App\Livewire\Forms\UserProfileForm;
use Illuminate\View\View;
use Livewire\Component;

class UserProfileUpdate extends Component
{
    public UserProfileForm $form;

    public function mount(): void
    {
        $this->form->name = \Auth::user()->name;
        $this->form->email = \Auth::user()->email;
    }

    public function submit(): void
    {
        $this->form->save();

        $this->redirectRoute('profile', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.user-profile-update');
    }
}
