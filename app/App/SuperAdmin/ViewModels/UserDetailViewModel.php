<?php 
namespace App\App\SuperAdmin\ViewModels;

use App\Domain\User\Actions\ShowUserAction;

Class UserDetailViewModel{
    protected $user;

    public function __construct(int $id, ShowUserAction $showUserAction)
    {
        $this->user = $showUserAction->execute($id);
    }

    public function user()
    {
        return $this->user;
    }
}
?>