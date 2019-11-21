<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use  Sortable;

    protected $fillable = ['name', 'svnr'];
    public $sortable = ['svnr', 'firstname', 'lastname', 'email', 'address', 'plz', 'city', 'country'];

}
