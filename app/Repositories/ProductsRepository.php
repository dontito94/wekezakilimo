<?php

namespace App\Repositories;

use App\Models\Products;
use InfyOm\Generator\Common\BaseRepository;

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'imagePath',
        'name',
        'description',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Products::class;
    }
}
