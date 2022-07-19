<?php

namespace App\Repositories;

use App\Models\ProductGallery;
use App\Repositories\BaseRepository;

/**
 * Class ProductGalleryRepository
 * @package App\Repositories
 * @version January 23, 2020, 9:42 am UTC
*/

class ProductGalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'product_id'
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
        return ProductGallery::class;
    }
}
