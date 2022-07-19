<?php

namespace App\Repositories;

use App\Models\Contactus;
use App\Repositories\BaseRepository;

/**
 * Class ContactusRepository
 * @package App\Repositories
 * @version February 6, 2020, 10:54 am UTC
*/

class ContactusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
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
        return Contactus::class;
    }
}
