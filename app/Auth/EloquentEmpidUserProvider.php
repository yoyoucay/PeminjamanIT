<?php

namespace App\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Support\Str;

class EloquentEmpidUserProvider extends EloquentUserProvider
{
    /**
     * Retrieve a user by their unique identifier and "empid".
     *
     * @param  mixed  $identifier
     * @param  string  $empid
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByEmpid($identifier, $empid)
    {
        if (is_null($user = $this->createModel()->newQuery()
            ->where($this->createModel()->getEmpidName(), $empid)
            ->first())) {
            return null;
        }

        return $user;
    }
}
