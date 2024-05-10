<?php

namespace App\Livewire;
use Livewire\Component;
use Spatie\Image\Image;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateAnnouncement extends Component
{
    use WithFileUploads;


    public $images = [];
    public $temporary_images;
    public $name;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'name' => 'required|min:5',
        'category' => 'required',
        'description' => 'required|min:5',
        'price'=>'required',
        'images.' => 'image|max:1024',
        'temporary_images.' => 'image|max:1024'
    ];

    protected $messages = [
        'required' => 'Il campo è obbligatorio',
        'min' => 'Il campo è troppo corto',
        'temporary_images..image' => 'I file devono essere immagini',
        'temporary_images..max' => 'L\'immagine dev\'essere massima 5mb',
        'images.image' => 'I file devono essere immagini',
        'images.max' => 'L\'immagine dev\'essere massima 5mb'
    ];



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

            $this->validate();

            $this->announcement = Category::find($this->category)->announcements()->create([

                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,]);

                if(count($this->images)){
                    foreach ($this->images as $image){

                        // Per caricamento immagini senza resize
                        // $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);

                        $newFileName="announcements/{$this->announcement->id}";
                        $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);
                        //! Commentata la logica del GoogleSafeSearch in quanto licenza mancante
                        RemoveFaces::withChain([
                            new ResizeImage($newImage->path, 400, 300)
                        //     new GoogleVisionSafeSearch($newImage->id),
                        //     new GoogleVisionLabelImage($newImage->id),
                            ])->dispatch($newImage->id);
                        }
                        File::deleteDirectory(storage_path('/app/livewire-tmp'));
                    }

                    $this->announcement->user()->associate(Auth::user());
                    $this->announcement->save();

                    session()->flash('status', 'Annuncio caricato correttamente, sarà pubblicato dopo la revisione!');
                    $this->reset();

                }

                public function render()
                {
                    return view('livewire.create-announcement');
                }
            }
