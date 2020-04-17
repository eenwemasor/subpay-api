<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/03/2020
 * Time: 22:02
 */

namespace App\Contracts;


use App\TransferFundTransaction;

interface TransferFundTransactionContract
{
    /**
     * @param array $transferFundTransaction
     * @return TransferFundTransaction
     */
    public function create(array $transferFundTransaction): TransferFundTransaction;

    /**
     * @param string $transaction_id
     * @return TransferFundTransaction
     */
    public function approve_transaction(string $transaction_id): TransferFundTransaction;

    /**
     * @param string $transaction_id
     * @return TransferFundTransaction
     */
    public function decline_transaction(string $transaction_id): TransferFundTransaction;
}