<?php
/**
 * @author Sam Street
 */

namespace App\Interfaces\Services;

use App\Entity\User;

interface StatisticsServiceInterface {
    public function userCompletedTasks( User $user );
}