<?php

namespace App\Containers\BoardMembers\Models;

use App\Ship\Parents\Models\Model;

class BoardMembers extends Model
{
    protected $fillable = [
        'member_id',
        'board_id'

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'boardmembers';

    public function board(){
        return $this->belongsTo(Board::class, 'board_id');
    }
    public function member(){
        return $this->belongsTo(Member ,'member_id');
    }

}
