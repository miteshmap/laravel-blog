<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Node extends Model
{
    protected $table = 'Node';

    protected $fillable = ['title', 'body', 'status'];

    public function comments() {
      return $this->hasMany(Comment::class); // where Comment::class = 'App\Comment';
    }

    public function addComment($body) {
      $this->comments()->create(compact('body'));
      /*Comment::create([
        'body' => $body,
        'node_id' => $this->id,
      ]);*/
    }
}
