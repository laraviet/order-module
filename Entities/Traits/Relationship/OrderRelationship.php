<?php

namespace Modules\Order\Entities\Traits\Relationship;

use Modules\Core\Entities\User;
use Modules\Order\Entities\OrderItem;
use Modules\Payment\Entities\Payment;

trait OrderRelationship
{
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orderBy()
    {
        return $this->belongsTo(User::class, 'order_by', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
