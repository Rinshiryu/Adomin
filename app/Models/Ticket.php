<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'judul',
        'isi',
        'status',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function statusLabel()
    {
        return match ($this->status) {
            'open' => 'Open',
            'process' => 'In Progress',
            'closed' => 'Closed',
        };
    }

    public function statusColor()
    {
        return match ($this->status) {
            'open' => 'bg-blue-100 text-blue-700',
            'process' => 'bg-yellow-100 text-yellow-700',
            'closed' => 'bg-green-100 text-green-700',
        };
    }
}