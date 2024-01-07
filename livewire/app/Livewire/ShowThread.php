<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thread;

class ShowThread extends Component
{
    public Thread $thread;
    public $body;

    public function postReply()
    {
        $this->validate(['body' => 'required']);

        auth()->user()->replies()->create([
            'thread_id' => $this->thread->id,
            'body' => $this->body,
        ]);

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.show-thread', [
            'replies' => $this->thread
                ->replies()
                ->whereNull('reply_id')
                ->with('user', 'replies.user', 'replies.replies')
                ->get(),
        ]);
    }
}
