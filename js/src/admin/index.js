import { settings } from '@fof-components';

const translationPrefix = 'fof-auth-gitlab.admin.settings.';

const {
  SettingsModal,
  items: { StringItem },
} = settings;

app.initializers.add('fof/auth-gitlab', () => {
  app.extensionSettings['fof-auth-gitlab'] = () =>
    app.modal.show(
      new SettingsModal({
        title: app.translator.trans(translationPrefix + 'title'),
        size: 'medium',
        items: [
          <StringItem key="fof-auth-gitlab.client_id">{app.translator.trans(translationPrefix + 'client_id_heading')}</StringItem>,
          <StringItem key="fof-auth-gitlab.client_secret">{app.translator.trans(translationPrefix + 'client_secret_heading')}</StringItem>,
          <StringItem key="fof-auth-gitlab.application_domain">
            {app.translator.trans(translationPrefix + 'application_domain_heading')}
            <div className="helpText">{app.translator.trans(translationPrefix + 'application_domain_text')}</div>
          </StringItem>,
        ],
      })
    );
});
