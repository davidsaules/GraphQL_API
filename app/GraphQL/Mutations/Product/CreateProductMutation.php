<?php

namespace App\GraphQL\Mutations\Product;

use App\Models\Product;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createProduct',
        'description' => 'Creates a product'
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'prod_category' => [
                'name' => 'prod_category',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'prod_color' => [
                'name' => 'prod_color',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'prod_size' => [
                'name' => 'prod_size',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'prod_price' => [
                'name' => 'prod_price',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'prod_bnd_id' => [
                'name' => 'prod_bnd_id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:brands,bnd_id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $product = new product();
        $product->fill($args);
        $product->save();

        return $product;
    }
}