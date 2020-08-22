import SettingsModal from '@fof/components/admin/settings/SettingsModal';
import StringItem from '@fof/components/admin/settings/items/StringItem';

app.initializers.add('fof/auth-gitlab', () => {
  app.extensionSettings['fof-auth-gitlab'] = () =>
    app.modal.show(
      new SettingsModal({
        title: app.translator.trans('fof-auth-gitlab.admin.gitlab_settings.title'),
        size: 'medium',
        items: [
          <StringItem key="fof-auth-gitlab.client_id">
            {app.translator.trans('fof-auth-gitlab.admin.gitlab_settings.client_id_label')}
          </StringItem>,
          <StringItem key="fof-auth-gitlab.client_secret">
            {app.translator.trans('fof-auth-gitlab.admin.gitlab_settings.client_secret_label')}
          </StringItem>,
          <StringItem key="fof-auth-gitlab.gitlab_domain">
          {app.translator.trans('fof-auth-gitlab.admin.gitlab_settings.client_gitlab_domain')}
          </StringItem>,
        ],
      })
    );
});
