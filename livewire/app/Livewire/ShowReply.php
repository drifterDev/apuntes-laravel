<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;
    public $body;
    public $updatedBody;
    public $is_creating = false;
    public $is_editing = false;

    public function updatedIsEditing()
    {
        $this->authorize('update', $this->reply);
        $this->is_creating = false;
    }

    public function updatedIsCreating()
    {
        $this->is_editing = false;
    }

    public function updateReply()
    {
        $this->authorize('update', $this->reply);
        $this->validate(['updatedBody' => 'required']);
        $this->reply->update([
            'body' => $this->updatedBody,
        ]);
        $this->is_editing = false;
    }

    public function postChild()
    {
        if (!is_null($this->reply->reply_id)) return;
        $this->validate(['body' => 'required']);

        auth()->user()->replies()->create([
            'thread_id' => $this->reply->thread->id,
            'reply_id' => $this->reply->id,
            'body' => $this->body,
        ]);

        $this->body = '';
        $this->is_creating = false;
    }

    public function render()
    {
        $this->updatedBody = $this->reply->body;
        return view('livewire.show-reply', [
            'replies' => $this->reply->replies()->get(),
        ]);
    }
}
