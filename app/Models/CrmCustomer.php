<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmCustomer extends Model
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use Auditable;

    public $table = 'crm_customers';

    public static $searchable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'status_id',
        'email',
        'phone',
        'address',
        'website',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public function status()
    {
        return $this->belongsTo(CrmStatus::class, 'status_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
