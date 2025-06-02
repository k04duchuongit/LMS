<?php 
namespace App\Domain\User\Actions;

use App\Domain\User\Repositories\UserRepositoryInterface;

Class DetailUserAction{
protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the action to get user details by ID.
     *
     * @param string $id
     * @return mixed
     */
    public function execute(string $id)
    {
        return $this->userRepository->getUserById($id);
    }
}

?>