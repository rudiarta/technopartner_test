<?php

    namespace App\Repository\Balance;

    use App\Transaction;
    use Illuminate\Support\Facades\DB;

    class BalanceRepository implements BalanceAdapter {
        public function GetCurrentBalance() : int
        {
            $pemasukan = Transaction::where('category.type_id', 1)
                        ->join('category', 'transaction.category_id', '=', 'category.id')
                        ->select(DB::raw('SUM(nominal) as nominal'))
                        ->first();
            $pengeluaran = Transaction::where('category.type_id', 2)
                        ->join('category', 'transaction.category_id', '=', 'category.id')
                        ->select(DB::raw('SUM(nominal) as nominal'))
                        ->first();

            $pemasukanNominal = $pemasukan->nominal == null ? 0 : $pemasukan->nominal;
            $pengeluaranNominal = $pengeluaran->nominal == null ? 0 : $pengeluaran->nominal;
            $balance = $pemasukanNominal - $pengeluaranNominal;

            return $balance;
        }

        public function GetAllIncomeBalance() : int
        {
            $pemasukan = Transaction::where('category.type_id', 1)
                        ->join('category', 'transaction.category_id', '=', 'category.id')
                        ->select(DB::raw('SUM(nominal) as nominal'))
                        ->first();

            $pemasukanNominal = $pemasukan->nominal == null ? 0 : $pemasukan->nominal;

            return $pemasukanNominal;
        }

        public function GetAllOutcomeBalance() : int
        {
            $pengeluaran = Transaction::where('category.type_id', 2)
                        ->join('category', 'transaction.category_id', '=', 'category.id')
                        ->select(DB::raw('SUM(nominal) as nominal'))
                        ->first();

            $pengeluaranNominal = $pengeluaran->nominal == null ? 0 : $pengeluaran->nominal;

            return $pengeluaranNominal;
        }
    }
