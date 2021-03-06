<?php

/*
 * This file is part of fof/auth-gitlab.
 *
 * Copyright (c) 2020 FriendsOfFlarum.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FoF\Auth\GitLab\Controllers;

use Flarum\Forum\Auth\Registration;
use FoF\Extend\Controllers\AbstractOAuthController;
use League\OAuth2\Client\Provider\AbstractProvider;
use Omines\OAuth2\Client\Provider\Gitlab;

class GitLabAuthController extends AbstractOAuthController
{
    /**
     * {@inheritdoc}
     */
    protected function getRouteName(): string
    {
        return 'auth.gitlab';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProvider(string $redirectUri): AbstractProvider
    {
        return new Gitlab([
            'clientId'     => $this->settings->get('fof-auth-gitlab.client_id'),
            'clientSecret' => $this->settings->get('fof-auth-gitlab.client_secret'),
            'redirectUri'  => $redirectUri,
            'domain'       => $this->settings->get('fof-auth-gitlab.application_domain'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getProviderName(): string
    {
        return 'gitlab';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAuthorizationUrlOptions(): array
    {
        return ['scope' => 'read_user'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getIdentifier($user): string
    {
        return $user->getId();
    }

    /**
     * {@inheritdoc}
     */
    protected function setSuggestions(Registration $registration, $user, string $token)
    {
        $registration
            ->suggestUsername($user->getUsername())
            ->provideTrustedEmail($user->getEmail())
            ->provideAvatar($user->getAvatarUrl())
            ->setPayload($user->toArray());
    }
}
