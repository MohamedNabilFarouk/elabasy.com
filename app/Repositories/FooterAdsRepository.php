<?php

namespace App\Repositories;

use App\Models\FooterAds;
use App\Repositories\BaseRepository;

/**
 * Class FooterAdsRepository
 * @package App\Repositories
 * @version January 23, 2020, 6:32 am UTC
*/

class FooterAdsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text',
        'image'
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
        return FooterAds::class;
    }
}
