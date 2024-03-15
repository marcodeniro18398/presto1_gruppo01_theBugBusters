<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    #[Validate('image', message: 'I file devono essere immagini')]
    #[Validate('required', message: 'L\'immagine è richiesta')]
    #[Validate('max:1024', message: 'L\'immagine deve massima 5mb')]
    public $images = [];
    
    #[Validate('image', message: 'I file devono essere immagini')]
    #[Validate('required', message: 'L\'immagine è richiesta')]
    #[Validate('max:1024', message: 'L\'immagine deve massima 5mb')]
    public $temporary_images;
    
    #[Validate('required', message: 'Il campo è obbligatorio')]
    #[Validate('min:5', message: 'Il nome è troppo corto')]
    public $name;
    
    #[Validate('required', message: 'Il campo è obbligatorio')]
    #[Validate('min:5', message: 'La descrizione è troppo corta')]
    public $description;
    
    #[Validate('required', message: 'Il campo è obbligatorio')]
    public $price;
    
    #[Validate('required', message: 'Il campo è obbligatorio')]
    public $category;
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024'
            ])) {
                foreach ($this->temporary_images as $image){
                    $this->images[] = $image;
                }
            }
        }
        
        public function removeImage($key){
            if (in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }
   
        public $announcement;
        public $image;

        public function store()
        {
        //    $announcement = $category->announcements()->create([
           
        //     ]);
            
            $this->validate();
            
            $announcement = Category::find($this->category)->announcements()->create([

            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,]);

            if(count($this->images)){
                foreach ($this->images as $image){
                    $announcement->images()->create(['path'=>$image->store('images', 'public')]);
                }
            }
            
            $this->announcement->user()->associate(Auth::user());
            $this->announcement->save();
            
            session()->flash('status', 'Annuncio caricato correttamente');
            $this->reset();
        }
        
        public function render()
        {
            return view('livewire.create-announcement');
        }
    }
    