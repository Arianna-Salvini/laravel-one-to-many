<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Project extends Model
{
    use HasFactory;
    protected $fillable=['title', 'slug', 'subtitle', 'description', 'image','tecnology' ,'url', 'image', 'type_id'];

  /**
   * Get the type that owns the Project
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function type(): BelongsTo
  {
      return $this->belongsTo(Type::class, 'foreign_key', 'other_key');
  }
}
