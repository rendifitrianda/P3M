<?php

namespace App\Models;

use App\Models\Dashboard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Dosen extends Model
{
    protected $table = 'dosen';
    
    public function Dashboard()
    {
        return $this->hasOne(Dashboard::class)->with('dosen');
    }
}
    
    // untuk menampilkan data pada table yang berbeda, gunakan method with
    // public function DashboardData()
    // {
    //     return $this->hasOne(Dashboard::class)->with('user');
    // }
