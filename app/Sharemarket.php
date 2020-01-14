<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Sharemarket extends Model
{
    use Sortable;

    public $sortable = ['id','companyname','price','created_at','updated_at'];
}
