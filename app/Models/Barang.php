<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
<<<<<<< HEAD
    protected $guarded = ['id'];        
=======
    protected $guarded = ['id'];
>>>>>>> 80a7f69 (update barang masuk dan barang keluar)
    public $timestamps = false;
}
