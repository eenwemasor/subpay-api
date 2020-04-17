<?php


namespace App\Repositories;


use App\Contracts\QuickBuyContract;
use App\QuickBuy;

class QuickBuyRepository implements QuickBuyContract
{

    /**
     * @param array $quickBuy
     * @return QuickBuy
     */
    public function create(array $quickBuy): QuickBuy
    {
        return QuickBuy::create($quickBuy);
    }
}