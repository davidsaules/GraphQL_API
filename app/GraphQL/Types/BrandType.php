<?php

namespace App\GraphQL\Types;

use App\Models\Brand;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BrandType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Brand',
        'description' => 'Set of brands',
        'model' => Brand::class
    ];

    public function fields(): array
    {
        return [
            'bnd_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of the brand'
            ],
            'bnd_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of the brand'
            ],
            'bnd_type' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Type of the brand'
            ],
            'products' => [
                'type' => Type::listOf(GraphQL::type('Product')),
                'description' => 'List of products'
            ]
        ];
    }
}