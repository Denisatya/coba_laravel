<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table ="biodata";
    //protected $primaryKey ="id_biodata";
    protected $fillable=['nama', 'nomer','alamat','tempat_lahir','tanggal_lahir'];
}
