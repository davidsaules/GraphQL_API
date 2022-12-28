<?php

namespace App\GraphQL\Mutations\Brand;

use App\Models\Brand;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;

class DeleteBrandMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteBrand',
        'description' => 'deletes a Brand'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'bnd_id' => [
                'name' => 'bnd_id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $Brand = Brand::findOrFail($args['bnd_id']);

        return  $Brand->delete() ? true : false;
    }
}