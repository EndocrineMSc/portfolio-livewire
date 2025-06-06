<?php

namespace App\Livewire\Atoms;

use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Livewire\Component;

class LanguageButton extends Component
{
    private string $path = '/';

    public function mount(): void
    {
        $this->path = request()->path();
    }

    public function changeAppLocale(): void
    {
        $newLocale = App::isLocale('de') ? 'en' : 'de';
        request()->session()->put('locale', $newLocale);
        $this->redirect($this->path);
    }

    public function render(): View
    {
        return view('livewire.atoms.language-button');
    }
}
