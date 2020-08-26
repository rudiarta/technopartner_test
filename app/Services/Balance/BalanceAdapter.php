<?php

namespace App\Services\Balance;

interface BalanceAdapter {
    public function CheckBalance($state) : int;
}
