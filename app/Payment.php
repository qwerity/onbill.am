<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Payment extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'payments';

    protected $dates = [
        'payment_due_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const VENDOR_RADIO = [
        'EasyPay' => 'EasyPay',
        'TelCell' => 'TelCell',
        'IDram'   => 'IDram',
    ];

    const STATUS_SELECT = [
        'Վճարված'        => 'Վճարված',
        'Վճարման ենթակա' => 'Վճարման ենթակա',
    ];

    protected $fillable = [
        'service_id',
        'client_id',
        'payment_due_date',
        'amount',
        'status',
        'vendor',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function getPaymentDueDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPaymentDueDateAttribute($value)
    {
        $this->attributes['payment_due_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
