<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];
    public $newTodo;

    public function addTodo()
    {
        $this->validate([
            'newTodo' => 'required|min:3',
        ]);

        $this->todos[] = $this->newTodo;
        $this->newTodo = '';
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
