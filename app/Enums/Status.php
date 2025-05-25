<?php

namespace App\Enums;

enum Status: string
{
    case PAID = 'paid';
    case PENDING = 'pending';
    case DECLINED = 'declined';
}
