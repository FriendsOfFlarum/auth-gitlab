# GitLab Login by FriendsOfFlarum

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/fof/auth-gitlab.svg)](https://packagist.org/packages/fof/auth-gitlab)

A [Flarum](http://flarum.org) extension. Allow users to log in with GitLab.



### Installation

Use [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) or install manually with composer:

```sh
composer require fof/auth-gitlab
```

### Updating

```sh
composer update fof/auth-gitlab
php flarum cache:clear
```

### Setup via GitLab
1. Go to https://gitlab.com/oauth/applications.
2. Log in if prompted.
3. Set the name of the application to whatever you want it to be (it doesn't really matter).
4. Enter your `Redirect Uri` which should be something like this: `https://myforum.com/auth/gitlab` (SSL is required).
5. The only scope necessary is `read_user` so just tick that box.
6. Copy your `Application Id` and `Secret` over to the extension's settings via your Flarum forum Admin CP & click "Save Settings".
7. (Optional) You can also add an optional base URL for self-hosted instances if needed.
8. ??? ???
9. PROFIT ONCE MORE!

### Links

- [Packagist](https://packagist.org/packages/fof/auth-gitlab)
- [GitHub](https://github.com/FriendsOfFlarum/auth-gitlab)

### Notes

- 09/18/2020 
    - As of Flarum Beta 14, this extension will be superseded by [FriendsOfFlarum Oauth](https://github.com/FriendsOfFlarum/oauth).

### Acknowledgements 

Special thanks to [@datitisev](https://github.com/datitisev) for his AMAZING Flarum development tools! 

See below for tools used in this project:

- [fof/extend](https://github.com/FriendsOfFlarum/extend)
- [@fof/components](https://github.com/FriendsOfFlarum/components)

Time saved during development: **A LOT**.
