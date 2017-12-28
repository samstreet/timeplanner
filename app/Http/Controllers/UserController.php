<?php
/**
 * @author Sam Street
 */

namespace App\Http\Controllers;

use App\Repository\UserRepository;

class UserController extends Controller
{
    /**
     * @var
     */
    private $repo;

    /**
     * UserController constructor.
     *
     * @param \App\Repository\UserRepository $repo
     */
    function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    function index()
    {
        die(var_dump($this->repo->find(1)));
    }

}