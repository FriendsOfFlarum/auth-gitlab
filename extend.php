<?php

/*
 * This file is part of fof/auth-gitlab.
 *
 * Copyright (c) 2019 FriendsOfFlarum.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FoF\Auth\GitLab;

use Flarum\Extend;
use FoF\Auth\GitLab\Controllers\GitLabAuthController;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
    (new Extend\Routes('forum'))
        ->get('/auth/gitlab', 'auth.gitlab', GitLabAuthController::class),
    new Extend\Locales(__DIR__.'/resources/locale'),
];
