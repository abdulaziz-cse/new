<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'is_permium'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePremium($query)
    {
        return $query->where('is_permium',1);
    }
      public function scopeFree($query)
    {
        return $query->whereNull('is_permium');
    }

}
