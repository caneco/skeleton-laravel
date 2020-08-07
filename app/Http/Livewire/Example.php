<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $current = 0;

    public $adjectives = [
        ':hot:',
        ':magic:',
        ':awesome:',
    ];

    public function nextAdjective()
    {
        $this->current++;

        if ($this->current >= count($this->adjectives)) {
            $this->current = 0;
        }
    }

    public function render()
    {
        return view('livewire.example');
    }
}
