<?php

namespace App\GraphQL\Queries;

use App\DataTransaction;
use App\Http\Controllers\SearchBuilder;
use Illuminate\Database\Eloquent\Builder;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class GetAllDataTransactions
{
    public function get_all_transactions($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): Builder
    {
        $from = $args['from_date'];
        $to = $args['to_date'];
        $status = $args['status'];
        $search = $args['search'];
        return SearchBuilder::search_builder(DataTransaction::query(),'data_transactions', $from,$to,$status,$search);
    }
}
