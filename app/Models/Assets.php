<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assets extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'type',
        'manufactured_by',
        'model',
        'serial_no',
        'address',
        'purchase_date',
        'last_maintenance_date',
        'condition',
        'organization_id',
        'assigned_to',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'assigned_to');
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
