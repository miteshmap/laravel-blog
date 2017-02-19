<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Node;
use App\Comment;

class CommentController extends Controller
{
  /**
   * Store comment for node.
   * @param \Illuminate\Http\Request $request
   */
  public function store(Node $node)
  {
    $this->validate(request(), [
      'body' => 'required|min:10'
    ]);

    $node->addComment(request('body'));

    // return redirect('/node/' . $node->id);
    return back();
  }

}
