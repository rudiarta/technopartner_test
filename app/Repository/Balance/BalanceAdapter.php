<?php

    namespace App\Repository\Balance;

    interface BalanceAdapter {
        public function GetCurrentBalance() : int;
        public function GetAllIncomeBalance() : int;
        public function GetAllOutcomeBalance() : int;
    }
