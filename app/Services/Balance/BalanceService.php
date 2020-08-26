<?php

    namespace App\Services\Balance;

    use App\Repository\Balance\BalanceAdapter as BalanceRepo;

    class BalanceService implements BalanceAdapter {

        public $balanceRepository;

        public function __construct(BalanceRepo $repo)
        {
            $this->balanceRepository = $repo;
        }

        public function CheckBalance($state) : int
        {
            if($state == "current"){
                return $this->balanceRepository->GetCurrentBalance();
            }

            if($state == "income"){
                return $this->balanceRepository->GetAllIncomeBalance();
            }

            if($state == "outcome"){
                return $this->balanceRepository->GetAllOutcomeBalance();
            }

            return 0;
        }
    }
