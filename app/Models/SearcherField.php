<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearcherField extends Model
{
    protected $fillable = ['table_name', 'field_id', 'label', 'type', 'order', 'is_visible'];

    public function config()
    {
        return $this->belongsTo(SearcherConfig::class, 'table_name', 'table_name');
    }
}
