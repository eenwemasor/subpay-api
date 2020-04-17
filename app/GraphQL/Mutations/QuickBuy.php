<?php

namespace App\GraphQL\Mutations;

use App\Services\QuickBuyService;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class QuickBuy
{
    /**
     * @var QuickBuyService
     */
    private $quick_buy;

    /**
     * QuickBuyEvent constructor.
     * @param QuickBuyService $quick_buy_service
     */
    public function __construct(QuickBuyService $quick_buy_service)
    {
        $this->quick_buy = $quick_buy_service;
    }
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */
    public function process_airtime_quick_buy($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->quick_buy->process_airtime_quick_buy($args);

    }


    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function process_data_quick_buy($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->quick_buy->process_data_quick_buy($args);

    }


    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function process_bill_quick_buy($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->quick_buy->process_bill_quick_buy($args);

    }

    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function process_power_quick_buy($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->quick_buy->process_power_quick_buy($args);

    }

    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return bool
     */
    public function verify_phone_number($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->quick_buy->verify_quick_buy_transaction($args['phone'],$args['network']);

    }


}
