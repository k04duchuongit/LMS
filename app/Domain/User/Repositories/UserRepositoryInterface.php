<?php 
namespace App\Domain\User\Repositories;

interface UserRepositoryInterface
{
   
    public function getAll();
    
     /**
     * Get a user by their ID.
     *
     * @param int $id
     * @return mixed
     */

    public function getUserById(int $id);

    /**
     * Create a new user.
     *
     * @param array $data
     * @return mixed
     */
    public function createUser(array $data);

    /**
     * Update an existing user.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function updateUser(int $id, array $data);

    /**
     * Delete a user by their ID.
     *
     * @param int $id
     * @return mixed
     */
    public function deleteUser(int $id);


}
?>