<?php

namespace App\GraphQL\Types;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Product',
        'description' => 'Set of products including the brand associated',
        'model' => Product::class
    ];

    public function fields(): array
    {
        return [
            'prod_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of the product'
            ],
            'prod_category' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Category of the product'
            ],
            'prod_color' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Color of the product'
            ],
            'prod_size' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Size of the product'
            ],
            'prod_price' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Price of the product'
            ],
            'brand' => [
                'type' => GraphQL::type('Brand'),
                'description' => 'Brand of the product'
            ]
        ];
    }
}