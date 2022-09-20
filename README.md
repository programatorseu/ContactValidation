# LiveWire

```php
    public $count = 0;
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
```

```php
<div>
    <span>{{$count}}</span>
    <button wire:click="decrement">-</button>
    <button wire:click="increment">+</button>

</div>
```

## Contact form validation

-   livewire installed
-   tailwind

LiveWire class :

```php
<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        $contact = $this->validate();

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;
        sleep(1);
        Mail::to('programatorseu@gmail.com')->send(new ContactFormMailable($contact));
        $this->successMessage = 'We received your message successfuly and will get back to you shortly!';
        $this->resetForm();
    }

    protected function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }
}

```
