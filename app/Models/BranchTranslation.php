<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchTranslation extends Model
{
    use HasFactory;

    protected $table = 'branch_translations';

    public $timestamps = false;

    protected $guarded = [];

    // accessors & Mutator start
    public function getTitleAttribute($val)
    {
        return $this->attributes['title'] = ucfirst($val);
    }
    // accessors & Mutator end
}
