<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateAnnouncement extends Component
{
    #[Validate('required', message: 'Il campo è obbligatorio')]
    #[Validate('min:5', message: 'Il nome è troppo corto')]
    public $name = '';

    #[Validate('required', message: 'Il campo è obbligatorio')]
    #[Validate('min:5', message: 'La descrizione è troppo corta')]
    public $description = '';

    #[Validate('required', message: 'Il campo è obbligatorio')]
    public $price = '';

    #[Validate('required', message: 'Il campo è obbligatorio')]
    public $category = '';

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $category = Category::find($this->category);
        $this->validate();
        $announcement = $category->announcements()->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);
        Auth::user()->announcements()->save($announcement);
        $this->reset();
        session()->flash('status', 'Annuncio caricato correttamente');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
