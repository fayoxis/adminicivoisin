<?php

namespace App\Repositories;

use App\Models\Prestataire;
use App\Repositories\BaseRepository;

/**
 * Class PrestataireRepository
 * @package App\Repositories
 * @version May 3, 2023, 7:32 am UTC
*/

class PrestataireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Prestataire::class;
    }
}
