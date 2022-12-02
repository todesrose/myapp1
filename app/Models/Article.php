<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Article extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = ['title', 'text', 'category'];
    public $sortable = ['id', 'title', 'category', 'created_at'];
}
