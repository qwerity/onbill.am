<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Team extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'owner_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function teamServices()
    {
        return $this->hasMany(Service::class, 'team_id', 'id');
    }

    public function teamClients()
    {
        return $this->hasMany(Client::class, 'team_id', 'id');
    }

    public function teamPayments()
    {
        return $this->hasMany(Payment::class, 'team_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
