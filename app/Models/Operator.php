<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Operator extends Authenticatable
{

    use HasFactory, Notifiable;
    protected $table = 'operator';
    
    protected $fillable = [
        'nidn', 
        'nama', 
        'no_hp', 
        'jenis_kelamin', 
        'username', 
        'password'
    ];

    static $rule = [
        'nidn' => 'required', 
        'nama' => 'required', 
        'no_hp' => 'required', 
        'jenis_kelamin' => 'required', 
        'username' => 'required', 
        'password'=> 'required', 
    ];
    static $isi = [
        'nidn.required' => 'Inputan tidak bole kosong !', 
        'nama.required' => 'Inputan tidak bole kosong !', 
        'no_hp.required' => 'Inputan tidak bole kosong !', 
        'jenis_kelamin.required' => 'Inputan tidak bole kosong !', 
        'username.required' => 'Inputan tidak bole kosong !', 
        'password.required'=> 'Inputan tidak bole kosong !', 
    ];
    
    
}
    
