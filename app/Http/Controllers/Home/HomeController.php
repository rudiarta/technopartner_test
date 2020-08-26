<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Balance\BalanceAdapter;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    const CURRENT_BALANCE = "current";
    const INCOME_BALANCE = "income";
    const OUTCOME_BALANCE = "outcome";

    public $balanceService;

    public function __construct(BalanceAdapter $balance)
    {
        $this->balanceService = $balance;
    }

    public function index(Request $req)
    {
        $currentBalance =  $this->balanceService->CheckBalance(self::CURRENT_BALANCE);
        $incomeBalance =  $this->balanceService->CheckBalance(self::INCOME_BALANCE);
        $outcomeBalance =  $this->balanceService->CheckBalance(self::OUTCOME_BALANCE);

        return view('home', [
                                'current' => $currentBalance,
                                'income' => $incomeBalance,
                                'outcome' => $outcomeBalance
                            ]);
    }
}
