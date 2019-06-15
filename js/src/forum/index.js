import { extend } from 'flarum/extend';
import LogInButtons from 'flarum/components/LogInButtons';
import LogInButton from 'flarum/components/LogInButton';

app.initializers.add('fof/auth-gitlab', () => {
  extend(LogInButtons.prototype, 'items', function(items) {
    items.add(
      'gitlab',
      <LogInButton className="Button LogInButton--gitlab" icon="fab fa-gitlab" path="/auth/gitlab">
        {app.translator.trans('fof-auth-gitlab.forum.log_in.with_gitlab_button')}
      </LogInButton>
    );
  });
});
