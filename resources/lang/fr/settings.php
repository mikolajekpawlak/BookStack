<?php

return [

    /**
     * Settings text strings
     * Contains all text strings used in the general settings sections of BookStack
     * including users and roles.
     */

    'settings' => 'Préférences',
    'settings_save' => 'Enregistrer les préférences',
    'settings_save_success' => 'Préférences enregistrées',

    /**
     * App settings
     */

    'app_settings' => 'Préférences de l\'application',
    'app_name' => 'Nom de l\'application',
    'app_name_desc' => 'Ce nom est affiché dans l\'en-tête et les e-mails.',
    'app_name_header' => 'Afficher le nom dans l\'en-tête ?',
    'app_public_viewing' => 'Accepter le visionnage public des pages ?',
    'app_secure_images' => 'Activer l\'ajout d\'image sécurisé ?',
    'app_secure_images_desc' => 'Pour des questions de performances, toutes les images sont publiques. Cette option ajoute une chaîne aléatoire difficile à deviner dans les URLs des images.',
    'app_editor' => 'Editeur des pages',
    'app_editor_desc' => 'Sélectionnez l\'éditeur qui sera utilisé pour modifier les pages.',
    'app_custom_html' => 'HTML personnalisé dans l\'en-tête',
    'app_custom_html_desc' => 'Le contenu inséré ici sera ajouté en bas de la balise <head> de toutes les pages. Vous pouvez l\'utiliser pour ajouter du CSS personnalisé ou un tracker analytique.',
    'app_logo' => 'Logo de l\'Application',
    'app_logo_desc' => 'Cette image doit faire 43px de hauteur. <br>Les images plus larges seront réduites.',
    'app_primary_color' => 'Couleur principale de l\'application',
    'app_primary_color_desc' => 'Cela devrait être une valeur hexadécimale. <br>Laisser vide pour rétablir la couleur par défaut.',
    'app_homepage' => 'Page d\'accueil de l\'application',
    'app_homepage_desc' => 'Choisissez une page à afficher sur la page d\'accueil au lieu de la vue par défaut. Les permissions sont ignorées pour les pages sélectionnées.',
    'app_homepage_select' => 'Sélectionnez une page',
    'app_disable_comments' => 'Désactiver les commentaires',
    'app_disable_comments_desc' => 'Désactive les commentaires sur toutes les pages de l\'application. Les commentaires existants ne sont pas affichés.',
    
    /**
     * Registration settings
     */

    'reg_settings' => 'Préférence pour l\'inscription',
    'reg_allow' => 'Accepter l\'inscription ?',
    'reg_default_role' => 'Rôle par défaut lors de l\'inscription',
    'reg_confirm_email' => 'Obliger la confirmation par e-mail ?',
    'reg_confirm_email_desc' => 'Si la restriction de domaine est activée, la confirmation sera automatiquement obligatoire et cette valeur sera ignorée.',
    'reg_confirm_restrict_domain' => 'Restreindre l\'inscription à un domaine',
    'reg_confirm_restrict_domain_desc' => 'Entrez une liste de domaines acceptés lors de l\'inscription, séparés par une virgule. Les utilisateurs recevront un e-mail de confirmation à cette adresse. <br> Les utilisateurs pourront changer leur adresse après inscription s\'ils le souhaitent.',
    'reg_confirm_restrict_domain_placeholder' => 'Aucune restriction en place',

    /**
     * Maintenance settings
     */

    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Nettoyer les images',
    'maint_image_cleanup_desc' => "Scan le contenu des pages et des révisions pour vérifier les images et les dessins en cours d'utilisation et lesquels sont redondant. Veuillez à faire une sauvegarde de la base de données et des images avant de lancer ceci.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorer les images dans les révisions',
    'maint_image_cleanup_run' => 'Lancer le nettoyage',
    'maint_image_cleanup_warning' => ':count images potentiellement inutilisées trouvées. Etes-vous sûr de vouloir supprimer ces images ?',
    'maint_image_cleanup_success' => ':count images potentiellement inutilisées trouvées et supprimées !',
    'maint_image_cleanup_nothing_found' => 'Aucune image inutilisée trouvée, rien à supprimer !',
    
    /**
     * Role settings
     */

    'roles' => 'Rôles',
    'role_user_roles' => 'Rôles des utilisateurs',
    'role_create' => 'Créer un nouveau rôle',
    'role_create_success' => 'Rôle créé avec succès',
    'role_delete' => 'Supprimer le rôle',
    'role_delete_confirm' => 'Ceci va supprimer le rôle \':roleName\'.',
    'role_delete_users_assigned' => 'Ce rôle a :userCount utilisateurs assignés. Vous pouvez choisir un rôle de remplacement pour ces utilisateurs.',
    'role_delete_no_migration' => "Ne pas assigner de nouveau rôle",
    'role_delete_sure' => 'Êtes-vous sûr de vouloir supprimer ce rôle ?',
    'role_delete_success' => 'Le rôle a été supprimé avec succès',
    'role_edit' => 'Modifier le rôle',
    'role_details' => 'Détails du rôle',
    'role_name' => 'Nom du rôle',
    'role_desc' => 'Courte description du rôle',
    'role_external_auth_id' => 'Identifiants d\'authentification externes',
    'role_system' => 'Permissions système',
    'role_manage_users' => 'Gérer les utilisateurs',
    'role_manage_roles' => 'Gérer les rôles et permissions',
    'role_manage_entity_permissions' => 'Gérer les permissions sur les livres, chapitres et pages',
    'role_manage_own_entity_permissions' => 'Gérer les permissions de ses propres livres, chapitres, et pages',
    'role_manage_settings' => 'Gérer les préférences de l\'application',
    'role_asset' => 'Permissions des ressources',
    'role_asset_desc' => 'Ces permissions contrôlent l\'accès par défaut des ressources dans le système. Les permissions dans les livres, les chapitres et les pages ignoreront ces permissions.',
	'role_asset_admins' => 'Les administrateurs ont automatiquement accès à l\'ensemble du contenun ; les choix ci-dessous permettent d\'afficher ou non des options dans l\'interface.',
    'role_all' => 'Tous',
    'role_own' => 'Propres',
    'role_controlled_by_asset' => 'Contrôlé par les ressources les ayant envoyés',
    'role_save' => 'Enregistrer le rôle',
    'role_update_success' => 'Rôle mis à jour avec succès',
    'role_users' => 'Utilisateurs ayant ce rôle',
    'role_users_none' => 'Aucun utilisateur avec ce rôle actuellement',

    /**
     * Users
     */

    'users' => 'Utilisateurs',
    'user_profile' => 'Profil d\'utilisateur',
    'users_add_new' => 'Ajouter un nouvel utilisateur',
    'users_search' => 'Chercher les utilisateurs',
    'users_role' => 'Rôles des utilisateurs',
    'users_external_auth_id' => 'Identifiant d\'authentification externe',
    'users_password_warning' => 'Remplissez ce formulaire uniquement si vous souhaitez changer de mot de passe:',
    'users_system_public' => 'Cet utilisateur représente les invités visitant votre instance. Il est assigné automatiquement aux invités.',
    'users_delete' => 'Supprimer un utilisateur',
    'users_delete_named' => 'Supprimer l\'utilisateur :userName',
    'users_delete_warning' => 'Ceci va supprimer \':userName\' du système.',
    'users_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer cet utilisateur ?',
    'users_delete_success' => 'Utilisateurs supprimés avec succès',
    'users_edit' => 'Modifier l\'utilisateur',
    'users_edit_profile' => 'Modifier le profil',
    'users_edit_success' => 'Utilisateur mis à jour avec succès',
    'users_avatar' => 'Avatar de l\'utilisateur',
    'users_avatar_desc' => 'Cette image doit être un carré d\'environ 256px.',
    'users_preferred_language' => 'Langue préférée',
    'users_social_accounts' => 'Comptes sociaux',
    'users_social_accounts_info' => 'Vous pouvez connecter des réseaux sociaux à votre compte pour vous connecter plus rapidement. Déconnecter un compte n\'enlèvera pas les accès autorisés précédemment sur votre compte de réseau social.',
    'users_social_connect' => 'Connecter le compte',
    'users_social_disconnect' => 'Déconnecter le compte',
    'users_social_connected' => 'Votre compte :socialAccount a été ajouté avec succès.',
    'users_social_disconnected' => 'Votre compte :socialAccount a été déconnecté avec succès',

];
