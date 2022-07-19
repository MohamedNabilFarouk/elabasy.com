<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version January 21, 2020, 10:48 am UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'des',
        'image',
        'category_id',
        'brand_id',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
