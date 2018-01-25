<?php
/**
 * @author Sam Street
 */

namespace App\Service;

use App\Entity\User;
use App\Interfaces\Services\StatisticsServiceInterface;

/**
 * Class StatisticsService
 *
 * @package App\Service
 */
class StatisticsService extends BaseService implements StatisticsServiceInterface
{
    public function userCompletedTasks(User $user)
    {
        return $user;
    }

}