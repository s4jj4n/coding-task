<?php
namespace App\Modules\Services\User;

use App\Modules\Services\Service;
use Exception;

/**
 * Class UserService
 * @package App\Modules\Services
 */
class UserService extends Service
{
    public function __construct()
    {

    }

    /**
     * Create a new user
     *
     * @param array $userData
     * @return Boolean
     */
    public function create(array $userData)
    {
        try {
            $fp = fopen('file.csv', 'a');
            fputcsv($fp, $userData);
            fclose($fp);

            return true;
        } catch (Exception $e) {

            return null;
        }
    }


    /**
     * Get all users
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function all()
    {

    }

    /**
     * Get the user with particular id or any specified field
     * @param $user
     * @param string $field
     * @return array
     */

    public function find($user, $field = 'id')
    {
        try {

        } catch (Exception $e) {

            return null;
        }

    }

}