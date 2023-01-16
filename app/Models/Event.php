<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'events';

    protected $dates = ['deleted_at'];

    protected $fillable = ['nama', 'deskripsi', 'lokasi', 'tgl_mulai', 'tgl_selesai'];
}
