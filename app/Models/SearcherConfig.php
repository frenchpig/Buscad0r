<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearcherConfig extends Model
{
    protected $fillable = ['table_name', 'columns_per_row'];

    public function fields()
    {
        return $this->hasMany(SearcherField::class, 'table_name', 'table_name')->orderBy('order');
    }
}
