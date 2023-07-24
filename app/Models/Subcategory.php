<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $tabel ='subcategories';
    protected $primaryKey ='sub_id';
    public function getSub(){
        return $this->hasOne('App\Models\Category','category_id');
    }
}
