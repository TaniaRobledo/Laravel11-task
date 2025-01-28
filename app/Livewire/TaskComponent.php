<?php

namespace App\Livewire;

use Livewire\Component;


class TaskComponent extends Component
{
    public $modal = false;
    public function openCreateModal()
    {
        $this->clearFields();
        $this->modal = true;
    }

    public function closeCreateModal()
    {
        $this->clearFields();
        $this->modal = false;
    }
}

