<?php
/**
 * @author Sam Street
 */

namespace App\Service;

/**
 * Class BaseService
 *
 * @package App\Service
 */
class BaseService
{
    /**
     * @var
     */
    protected $repo;

    /**
     * @return mixed
     */
    public function getRepo()
    {
        return $this->repo;
    }


}
