<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Services\Transaction\TransactionAdapter;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public $transaction;

    public function __construct(TransactionAdapter $transaction)
    {
        $this->transaction = $transaction;
    }

    public function index(Request $req)
    {


        return "oke";
    }
}
