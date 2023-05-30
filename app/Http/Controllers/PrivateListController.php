<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Inertia\Response as InertiaResponse;

class PrivateListController extends Controller
{
    public function show(UserList $list): InertiaResponse
    {
        $this->authorize('view', $list);

        return inertia('List/Show');
    }
}
