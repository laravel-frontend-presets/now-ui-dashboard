<?php

namespace App\Providers;

use App\Tag;
use App\Item;
use App\Role;
use App\User;
use App\Category;
use App\Policies\TagPolicy;
use App\Policies\ItemPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\CategoryPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Category::class => CategoryPolicy::class,
        Item::class => ItemPolicy::class,
        Role::class => RolePolicy::class,
        Tag::class => TagPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-items', 'App\Policies\UserPolicy@manageItems');

        Gate::define('manage-users', 'App\Policies\UserPolicy@manageUsers');
    }
}
