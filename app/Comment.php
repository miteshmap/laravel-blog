<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Set the table name for mode. by default it looks for "comments".
    protected $table = 'comment';

    // Set the primary key.
    protected $primaryKey = 'cid';

    // only fillable fields.
    protected $fillable = ['body', 'node_id'];


  /**
     * Get the node belngs to the comment.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function node() {
      return $this->belongsTo('App\Node');
    }
}
