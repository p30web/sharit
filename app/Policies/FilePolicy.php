<?php

namespace App\Policies;

use App\Models\File;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class FilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param File $file
     * @return mixed
     */
    public function delete(User $user, File $file)
    {
        return $user->id == $file->uploaded_by
            ? Response::allow()
            : Response::deny('You do not own this File.');
    }

}
