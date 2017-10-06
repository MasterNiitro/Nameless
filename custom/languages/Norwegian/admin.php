<?php
/*
 *	Oversatt av Thesevs
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC versjon 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Norsk språk - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Vennligst logg inn på nytt.',

	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => 'Administrasjon',
	'overview' => 'Oppsummering',
	'core' => 'Kjerne',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduler',
	'security' => 'Sikkerhet',
	'styles' => 'Stiler',
	'users_and_groups' => 'Brukere og grupper',

	// Overview
	'running_nameless_version' => 'Kjører NamelessMC versjon <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Kjører PHP versjon <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistikk',
    'notices' => 'Notices',
    'no_notices' => 'No notices.',
    'email_errors_logged' => 'Email errors have been logged. Click <a href="{x}">here</a> to view.', // Don't replace "{x}"

	// Core
	'settings' => 'Instillinger',
	'general_settings' => 'Generelle instillinger',
	'sitename' => 'Nettstedets navn',
	'default_language' => 'Standardspråk',
	'default_language_help' => 'Tilskuere på nettstedet kan benytte alle installerte språk',
	'installed_languages' => 'Installasjonen av språket var vellykket!',
	'default_timezone' => 'Standard tidssone',
	'registration' => 'Registrering',
	'enable_registration' => 'Vil du åpne for registrering?',
	'verify_with_mcassoc' => 'Verifiser bruker med MCAssoc-tillegget?',
	'email_verification' => 'Vil du kreve e-postverifikasjon av nye kontoer?',
	'homepage_type' => 'Forsidetype',
	'post_formatting_type' => 'Formatteringstype for poster',
	'portal' => 'Portal',
	'missing_sitename' => 'Navnet på nettstedet må være mellom 2 og 64 tegn.',
	'use_friendly_urls' => 'Søkemotorvennlige URL-adresser',
	'use_friendly_urls_help' => 'VIKTIG! For at denne funksjonen skal fungere må du ha mod_rewrite og .htaccess tilgjengelig for web-serveren din. (Kun Apache2 er støttet for øyeblikket)',
	'config_not_writable' => '<strong>core/config.php</strong> er ikke skrivbar. Sjekk filens rettigheter og web-serverens tilgang. (www-data og chmod g+rw)',
	'social_media' => 'Sosiale medier',
	'youtube_url' => 'YouTube-URL',
	'twitter_url' => 'Twitter-URL',
	'twitter_dark_theme' => 'Bruk mørkt tema for Twitter-modulen?',
	'discord_id' => 'Discord Server ID',
	'google_plus_url' => 'Google+ URL',
	'facebook_url' => 'Facebook-URL',
	'successfully_updated' => 'Vellykket endring i innstillinger!',
    'debugging_and_maintenance' => 'Feilsøk og vedlikehold',
    'enable_debug_mode' => 'Tillatt feilsøkingsmodus?',
    'force_https' => 'Overstyr https?',
    'force_https_help' => 'Hvis aktivert, alle forespørsler på din nettside vil bli videresendt til https. Du må ha en gyldig SSL sertifikat aktiv for at dette skal funke.',
    'contact_email_address' => 'Contact Email Address',
    'emails' => 'Email',
    'email_errors' => 'Email error',
    'registration_email' => 'Registreringsemail',
    'contact_email' => 'Kontaktemail',
    'forgot_password_email' => 'Forgot Password Email',
    'unknown' => 'Ukjent',
    'delete_email_error' => 'Slett error',
    'confirm_email_error_deletion' => 'Er du sikker på at du vil slette denne erroren?',
    'viewing_email_error' => 'Viser error',
    'unable_to_write_email_config' => 'Kunne ikke skrive til filen <strong>core/email.php</core>. Vennligst sjekk filpermisjonen.',
    'enable_mailer' => 'Aktiver PHPMailer?',
    'enable_mailer_help' => 'Aktiver denne funksjonen hvis mailene ikke blir sendt automatisk. Bruk av PHPMailer krever at du har tilgang til foreksempel Gmail eller en SMTP støtter.',
    'outgoing_email' => 'Utgående email adresser',
    'outgoing_email_info' => 'Dette er emailen NamelesMC vil bruke til å sende ut mails.',
    'mailer_settings_info' => 'De markerte feltene må være utfylt hvis du har PHPMailer aktivert. For mer informasjon om hvordan du fyller ut disse feltene, sjekk ut <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">wiki</a>.',
    'host' => 'Vert',
    'email_port' => 'Port',
    'email_password_hidden' => 'Passordet vises ikke på grunn av sikkerhetsmessige årsaker.',
    'send_test_email' => 'Send test email',
    'send_test_email_info' => 'Denne knappen vil prøve å sende en test email til din email adresse, <strong>{x}</strong>. Alle errorene som blir oppdaget, vil bli listet her.', // Don't replace {x}
    'send' => 'Send',
    'test_email_error' => 'Test email error:',
    'test_email_success' => 'Test email ble suksessfullt sendt!',
    'terms_error' => 'Pass på at dine betingelser og vilkår ikke er mer enn 2048 tegn.',
    'terms_updated' => 'Vilkår har suksessfullt blitt oppdatert!',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Allow custom user avatars?',
    'default_avatar' => 'Default avatar',
    'custom_avatar' => 'Custom avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar source',
    'built_in_avatars' => 'Built-in avatar service',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspective',
    'face' => 'Face',
    'head' => 'Head',
    'select_default_avatar' => 'Select a new default avatar:',
    'no_avatars_available' => 'No avatars available. Please upload a new image above first.',
    'avatar_settings_updated_successfully' => 'Avatar settings updated successfully.',
    'navigation' => 'Navigation',
    'navbar_order' => 'Navbar Order',
    'navbar_order_instructions' => 'You can give each item a number above 0 to order items in the navbar, with 1 being the first item and higher numbers coming after it.',

	// Reactions
	'icon' => 'Ikon',
	'type' => 'Type',
	'positive' => 'Positiv',
	'neutral' => 'Nøytral',
	'negative' => 'Negativ',
	'editing_reaction' => 'Redigerer reaksjon',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Ny reaksjon',
	'creating_reaction' => 'Oppretter ny reaksjon',

	// Custom profile fields
	'custom_fields' => 'Egendefinerbare profilfelt',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nytt felt',
	'required' => 'Påkrevd',
	'public' => 'Synlig for offentligheten',
	'text' => 'Tekst',
	'textarea' => 'Tekstområde',
	'date' => 'Dato',
	'creating_profile_field' => 'Lager nytt profilfelt',
	'editing_profile_field' => 'Redigerer profilfelt',
	'field_name' => 'Feltnavn',
	'profile_field_required_help' => 'Påkrevde felt må fylles inn av en bruker.',
	'profile_field_public_help' => 'Offentlige bokser vil være synlig for alle tilskuere på nettstedet, med mindre nettstedsmoderatorene har skrudd av dette.',
	'profile_field_error' => 'Feltnavnet må være mellom 2 og 16 tegn langt.',
	'description' => 'Beskrivelse',
	'display_field_on_forum' => 'Synlig på forumet',
	'profile_field_forum_help' => 'Hvis "Synlig på forumet" er aktivert vil alle som bruker forumet kunne se feltet.',

	// Minecraft
	'enable_minecraft_integration' => 'Aktiver Minecraft-integrasjon',
    'mc_service_status' => 'Minecraft-tjenestens status',
    'service_query_error' => 'Kunne ikke hente tjenestestatus',
    'authme_integration' => 'AuthMe-integrasjon',
    'authme_integration_info' => 'Hvis AuthMe-integrasjonen er aktivert, vil brukere kun kunne registrere seg inne på serveren.',
   	'enable_authme' => 'Aktiver AuthMe-integrasjon',
    'authme_db_address' => 'IP-adresse for AuthMe (MySQL)',
    'authme_db_port' => 'Port for AuthMe (MySQL)',
    'authme_db_name' => 'Databasenavn for AuthMe (MySQL)',
    'authme_db_user' => 'Brukernavn for AuthMe (MySQL)',
    'authme_db_password' => 'Passord for AuthMe (MySQL)',
    'authme_hash_algorithm' => 'AuthMe hashing-algoritme',
    'authme_db_table' => 'Tabellen for AuthMe (MySQL)',
    'enter_authme_db_details' => 'Fyll inn databasekonfigurasjonsdataen for å koble sammen nettstedet og AuthMe.',
    'authme_password_sync' => 'Synkroniser brukerpassordet',
    'authme_password_sync_help' => 'Hvis denne funksjonen er aktivert vil en brukers passord automatisk oppdateres på nettstedet når brukeren endrer det inne i spillet.',
    'minecraft_servers' => 'Minecraft-servere',
    'account_verification' => 'Minecraft-kontoverifisering',
    'server_banners' => 'Server-bannere',
    'query_errors' => 'Spørrefeil',
    'add_server' => '<i class="fa fa-plus-circle"></i> Legg til en server',
    'no_servers_defined' => 'No servers have been defined yet',
    'query_settings' => 'Query innstillinger',
    'default_server' => 'Standard server',
    'no_default_server' => 'Ingen standardserver',
    'external_query' => 'Bruk ekstern query?',
    'external_query_help' => 'Hvis standardserver query ikke funker, aktiver denne funksjonen.',
    'adding_server' => 'Legger til en server',
    'server_name' => 'Serverens navn',
    'server_address' => 'Serverens adresse',
    'server_address_help' => 'Adressen er det samme som feltet du fyller inn for å logge på serveren.',
    'server_port' => 'Server Port',
    'parent_server' => 'Hovedserver',
    'parent_server_help' => 'En hovedserver er som oftest BungeeCorden som serveren er koblet til, hvis det finnes.',
    'no_parent_server' => 'Ingen hovedserver',
    'bungee_instance' => 'BungeeCord funksjon?',
    'bungee_instance_help' => 'Velg dette alternativet hvis serveren er en BungeeCord.',
    'server_query_information' => 'For at spillerlisten skal vises på nettsiden, <strong>må</strong> serveren ha \'enable-query\' alternativet aktivert på <strong>server.properties</strong> filen.',
    'enable_status_query' => 'Aktiver status query?',
    'status_query_help' => 'Hvis dette er aktivert, vil statussiden vise om serveren er online eller offline.',
    'enable_player_list' => 'Aktiver spillerliste?',
    'pre_1.7' => 'Minecraft versjon eldre enn 1.7?',
    'player_list_help' => 'Hvis dette er aktivert, vile statussiden vise de påloggede spillerne.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'This is the query.port option in your server\'s server.properties file, provided the enable-query option in the same file is set to true.',
    'server_name_required' => 'Skriv inn servernavnet.',
    'server_name_minimum' => 'Servernavnet må være minst 1 tegn.',
    'server_name_maximum' => 'Servernavnet må være maksimum 20 tegn.',
    'server_address_required' => 'Vennligst skriv inn serveradressen.',
    'server_address_minimum' => 'Serveradressen må være minst 1 tegn.',
    'server_address_maximum' => 'Serveradressen må være maks 64 tegn.',
    'server_port_required' => 'Vennligst skriv inn server porten',
    'server_port_minimum' => 'Porten må være minimum 2 tegn.',
    'server_port_maximum' => 'Porten må være maksimum 5 tegn.',
    'server_parent_required' => 'Velg en hovedserver',
    'query_port_maximum' => 'Server query porten må være maksimum 5 tegn.',
    'server_created' => 'Server suksessfullt lagd.',
    'confirm_delete_server' => 'Er du sikker på at du vil slette denne serveren?',
    'server_updated' => 'Server suksessfullt oppdatert!',
    'editing_server' => 'Endrer server',
    'server_deleted' => 'Serveren ble suksessfullt slettet.',
    'unable_to_delete_server' => 'Kunne ikke slette server.',
    'leave_port_empty_for_srv' => 'You can the port empty if it is 25565, or if your domain uses an SRV record',
    'viewing_query_error' => 'Viewing Query Error',
    'confirm_query_error_deletion' => 'Are you sure you want to delete this query error?',
    'no_query_errors' => 'No query errors logged.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> New Banner',
    'purge_errors' => 'Purge Errors',
    'confirm_purge_errors' => 'Are you sure you want to purge all errors?',
    'mcassoc_help' => 'mcassoc is an external service which can be used to verify users own the Minecraft account they have registered with. To use this feature, you will need to sign up for a shared key <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>.',
    'mcassoc_key' => 'mcassoc Shared Key',
    'mcassoc_instance' => 'mcassoc Instance Key',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Click to generate an instance key</a>',
    'mcassoc_error' => 'Please ensure you that have entered your shared key correctly, and that you have generated an instance key correctly.',
    'updated_mcassoc_successfully' => 'mcassoc settings updated successfully.',
    'force_premium_accounts' => 'Force premium Minecraft accounts?',
    'banner_background' => 'Banner background',
    'query_interval' => 'Query interval (in minutes, must be between 5 and 60)',
    'player_graphs' => 'Player Graphs',
    'player_count_cronjob_info' => 'You can set up a cron job to query your servers every {x} minutes with the following command:',

	// Modules
	'modules_installed_successfully' => 'Modulene er nå oppdatert',
	'enabled' => 'Aktivert',
	'disabled' => 'Deaktivert',
	'enable' => 'Aktiver',
	'disable' => 'Deaktiver',
	'module_enabled' => 'Modul aktivert.',
	'module_disabled' => 'Modul deaktivert.',
	'author' => 'Utgiver:',

	// Styles
	'templates' => 'Maler',
	'template_outdated' => 'Malen er kun kompatibel med NamelessMC versjon {x}, men du kjører versjon {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktiv',
	'deactivate' => 'Ikke aktiv',
	'activate' => 'Aktiver',
	'warning_editing_default_template' => 'Advarsel! Denne malen bør ikke redigeres.',
	'images' => 'Bilder',
	'upload_new_image' => 'Last opp nytt bilde',
	'reset_background' => 'Tilbakestill bakgrunnen',
	'install' => '<i class="fa fa-plus-circle"></i> Installer',
	'template_updated' => 'Malen er nå oppdatert!',
	'default' => 'Standard',
	'make_default' => 'Gjør til standardmal',
	'default_template_set' => 'Din standardmal er nå {x}.', // Don't replace {x}
	'template_deactivated' => 'Mal deaktivert.',
	'template_activated' => 'Mal aktivert.',
	'permissions' => 'Tilganger',
	'setting_perms_for_x' => 'Setting permissions for template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Are you sure you want to delete this template?',
	'delete' => 'Delete',
	'template_deleted_successfully' => 'Template deleted successfully.',

	// Users & groups
	'users' => 'Brukere',
	'groups' => 'Grupper',
	'group' => 'Gruppe',
	'new_user' => '<i class="fa fa-plus-circle"></i> Ny bruker',
	'creating_new_user' => 'Opprettet ny bruker.',
	'registered' => 'Registrert',
	'user_created' => 'Bruker opprettet.',
	'cant_delete_root_user' => 'Du kan ikke slette Admin-brukeren!',
	'cant_modify_root_user' => 'Du kan ikke redigere Admin-gruppen!',
	'user_deleted' => 'Bruker slettet.',
	'confirm_user_deletion' => 'Er du sikker på at du vil slette brukeren <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Gyldig bruker',
	'update_uuid' => 'Oppdater UUID',
	'update_mc_name' => 'Oppdater Minecraft-brukernavn',
	'reset_password' => 'Gjenoprett passord',
	'punish_user' => 'Gi brukeren en straff',
	'delete_user' => 'Slett brukeren',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andre valg',
	'disable_avatar' => 'Deaktiver avatar',
	'select_user_group' => 'Du må velge brukerens gruppe.',
	'uuid_max_32' => 'UUID må være maksimum 32 tegn.',
	'title_max_64' => 'Brukernavnet kan maksimum være 64 tegn.',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Gruppe ID',
	'name' => 'Navn',
	'title' => 'Bruker tittel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Ny gruppe',
	'group_name_required' => 'Vennligst skriv inn et gruppenavn.',
	'group_name_minimum' => 'Pass på at gruppenavnet er minst 2 tegn.',
	'group_name_maximum' => 'Pass på at gruppenavnet er maks 20 tegn.',
	'creating_group' => 'Lager ny gruppe',
	'group_html_maximum' => 'Pass på at gruppens HTML ikke er lengre enn 1024 tegn.',
	'group_html' => 'Gruppe HTML',
	'group_html_lg' => 'Gruppe HTML Stor',
	'group_username_colour' => 'Gruppe brukernavnfarge',
	'group_staff' => 'Er denne gruppa en staff gruppe?',
	'group_modcp' => 'Har denne gruppa tilgang til ModCP?',
	'group_admincp' => 'Har denne gruppa tilgang til AdminCP?',
	'delete_group' => 'Slett gruppe',
	'confirm_group_deletion' => 'Er du sikker på at du vil slette gruppa {x}?', // Don't replace {x}
	'group_not_exist' => 'Den gruppa eksisterer ikke.',
	'secondary_groups' => 'Secondary Groups',
	'secondary_groups_info' => 'The user will gain any additional permissions from these groups',

	// General Admin language
	'task_successful' => 'Kapittel ferdig.',
	'invalid_action' => 'Ugyldig valg.',
	'enable_night_mode' => 'Aktiver nattmodus',
	'disable_night_mode' => 'Deaktiver nattmodus',
	'view_site' => 'Vis side',
	'signed_in_as_x' => 'Logget inn som {x}', // Don't replace {x}
	'warning' => 'Advarsel',

	// Maintenance
	'maintenance_mode' => 'Vedlikeholdsmodus',
	'maintenance_enabled' => 'Vedlikeholdsmodus er aktivert.',
	'enable_maintenance_mode' => 'Aktiver vedlikeholdsmodus??',
	'maintenance_mode_message' => 'Vedlikeholdsmelding',
	'maintenance_message_max_1024' => 'Pass på at vedlikeholdsmeldingen er maks 1024 tegn',

	// Security
	'acp_logins' => 'AdminCP Logg inns',
	'please_select_logs' => 'Velg logs du vil vise.',
	'ip_address' => 'IP Addresser',
	'template_changes' => 'Template forandringer',
	'file_changed' => 'File endringer',

	// Updates
	'update' => 'Oppdater',
	'current_version_x' => 'Denne versjonen: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Ny versjon:: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Det er en ny oppdatering tilgjengelig',
	'up_to_date' => 'Din NamelessMC kjører den nyeste versjonen!',
	'urgent' => 'Denne oppdateringen er en midlertidig versjon.',
	'changelog' => 'Oppdateringshistorikk',
	'update_check_error' => 'Det oppsto en feil under søket:',
	'instructions' => 'Instruksjoner',
	'download' => 'Last ned',
	'install_confirm' => 'Pass på at du har lastet opp filene først!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget enabled.',
	'widget_disabled' => 'Widget disabled.',
	'editing_widget_x' => 'Editing widget {x}', // Don't replace {x}

    // Custom Pages
    'pages' => 'Pages',
    'new_page' => '<i class="fa fa-plus-circle"></i> New Page',
    'no_custom_pages' => 'No pages have been created yet.',
    'creating_new_page' => 'Creating Page',
    'page_title' => 'Page Title',
    'page_path' => 'Page Path (with preceding /, eg /example)',
    'page_icon' => 'Page Icon',
    'page_link_location' => 'Page Link Location',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"More" Dropdown',
    'page_link_none' => 'No link',
    'page_content' => 'Page Content',
    'page_redirect' => 'Page Redirect?',
    'page_redirect_to' => 'Redirect Link (with preceding http://)',
    'unsafe_html' => 'Allow unsafe HTML?',
    'unsafe_html_warning' => 'Enabling this option means any HTML can be used on the page, including potentially dangerous JavaScript. Only enable this if you are sure your HTML is safe.',
    'page_permissions' => 'Page Permissions',
    'view_page' => 'View Page?',
    'editing_page_x' => 'Editing Page {x}', // Don't replace {x}
    'unable_to_create_page' => 'Unable to create page:',
    'page_title_required' => 'A page title is required.',
    'page_url_required' => 'A page path is required.',
    'link_location_required' => 'A link location is required.',
    'page_title_minimum_2' => 'The page title must be a minimum of 2 characters.',
    'page_url_minimum_2' => 'The page path must be a minimum of 2 characters.',
    'page_title_maximum_30' => 'The page title must be a maximum of 30 characters.',
    'page_icon_maximum_64' => 'The page icon must be a maximum of 64 characters.',
    'page_url_maximum_20' => 'The page path must be a maximum of 20 characters.',
    'page_content_maximum_20480' => 'The page content must be a maximum of 20480 characters.',
    'page_redirect_link_maximum_512' => 'The page redirect link must be a maximum of 512 characters.',
    'confirm_delete_page' => 'Are you sure you want to delete this page?',

	// File uploads
	'drag_files_here' => 'Dra filene hit for å laste opp.',
	'invalid_file_type' => 'Ugyldig filtype.',
	'file_too_big' => 'Filen er for stor! Din fil var {{filesize}} og maksimum er {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
