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
    protected $file;

    public function __construct()
    {
        $this->file = 'users.csv';
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
            $fp = fopen($this->file, 'a');
            fputcsv($fp, $userData);
            fclose($fp);

            return true;
        } catch (Exception $e) {

            return null;
        }
    }


    /**
     * Get all users
     *
     * @return array
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        $userData = [];
        if (($handle = fopen($this->file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $userData[] = $data;
            }
            fclose($handle);
        }

        return $userData;
    }

    /**
     * Get the user with particular id
     *
     * @param $id
     * @return array
     */

    public function find($id)
    {
        try {
            $users = $this->all();

            return isset($users[$id]) ? $users[$id] : [];
        } catch (Exception $e) {

            return null;
        }

    }

}