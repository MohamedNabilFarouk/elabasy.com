<?php

namespace App\Repositories;

use App\Models\Ads;
use App\Repositories\BaseRepository;

/**
 * Class AdsRepository
 * @package App\Repositories
 * @version January 21, 2020, 11:52 am UTC
*/

class AdsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'text',
        'link'
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
        return Ads::class;
    }
}
