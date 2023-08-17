<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    'admin_admin_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin/admin']], [], [], []],
    'admin_admin_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::addNewadmin'], [], [['text', '/admin/admin/new']], [], [], []],
    'admin_admin_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/admin']], [], [], []],
    'admin_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/admin/delete']], [], [], []],
    'admin_agendas' => [[], ['_controller' => 'App\\Controller\\Admin\\AgendasController::index'], [], [['text', '/admin/agendas/']], [], [], []],
    'api_event_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AgendasController::majEvent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/agendas/api']], [], [], []],
    'new_event' => [[], ['_controller' => 'App\\Controller\\Admin\\AgendasController::newEvent'], [], [['text', '/admin/agendas/new/event']], [], [], []],
    'calendrier_delete' => [[], ['_controller' => 'App\\Controller\\Admin\\AgendasController::deleteAction'], [], [['text', '/admin/agendas/suppression/cours']], [], [], []],
    'imprimer_pdf' => [[], ['_controller' => 'App\\Controller\\Admin\\AgendasController::pdf'], [], [['text', '/admin/agendas/imprimer/pdf']], [], [], []],
    'admin_edit_evenement' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AgendasController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/agendas']], [], [], []],
    'admin_agendas_list' => [[], ['_controller' => 'App\\Controller\\Admin\\AgendasController::list'], [], [['text', '/admin/agendas/list']], [], [], []],
    'admin_agendas_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AgendasController::delete'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/agendas']], [], [], []],
    'admin_bibliotheque_index' => [[], ['_controller' => 'App\\Controller\\Admin\\BibliothequeController::index'], [], [['text', '/admin/bibliotheque/']], [], [], []],
    'admin_bibliotheque_new' => [[], ['_controller' => 'App\\Controller\\Admin\\BibliothequeController::new'], [], [['text', '/admin/bibliotheque/new']], [], [], []],
    'admin_bibliotheque_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BibliothequeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/bibliotheque']], [], [], []],
    'admin_bibliotheque_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BibliothequeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/bibliotheque']], [], [], []],
    'admin_bibliotheque_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BibliothequeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/bibliotheque']], [], [], []],
    'code_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CodeController::index'], [], [['text', '/admin/code/']], [], [], []],
    'code_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CodeController::new'], [], [['text', '/admin/code/new']], [], [], []],
    'code_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CodeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/code']], [], [], []],
    'code_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CodeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/code']], [], [], []],
    'code_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CodeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/code']], [], [], []],
    'cycle_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CycleController::index'], [], [['text', '/admin/cycle/']], [], [], []],
    'cycle_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CycleController::new'], [], [['text', '/admin/cycle/new']], [], [], []],
    'cycle_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CycleController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/cycle']], [], [], []],
    'cycle_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CycleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/cycle']], [], [], []],
    'cycle_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CycleController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/cycle']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin/dashboard']], [], [], []],
    'liste_etudiant' => [['id', 'cycle'], ['_controller' => 'App\\Controller\\Admin\\DashboardController::liste'], [], [['variable', '/', '[^/]++', 'cycle'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/etudiant/liste']], [], [], []],
    'list_etudiant' => [['id', 'name'], ['_controller' => 'App\\Controller\\Admin\\DashboardController::list'], [], [['variable', '/', '[^/]++', 'name'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/etudiant/index']], [], [], []],
    'profil_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\DashboardController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/etudiant/profil']], [], [], []],
    'profil_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\DashboardController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/etudiant/delete/profil']], [], [], []],
    'admin_document' => [[], ['_controller' => 'App\\Controller\\Admin\\DocumentController::index'], [], [['text', '/admin/document']], [], [], []],
    'admin_document_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\DocumentController::supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/document']], [], [], []],
    'ec_index' => [[], ['_controller' => 'App\\Controller\\Admin\\EcController::index'], [], [['text', '/admin/ec/']], [], [], []],
    'ec_new' => [[], ['_controller' => 'App\\Controller\\Admin\\EcController::new'], [], [['text', '/admin/ec/new']], [], [], []],
    'ec_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EcController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/ec']], [], [], []],
    'ec_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EcController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/ec']], [], [], []],
    'ec_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EcController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/ec']], [], [], []],
    'index_admin_gestion_cours' => [[], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::indexAction'], [], [['text', '/admin/gestionCours/index']], [], [], []],
    'admin_cours_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours']], [], [], []],
    'admin_cours_support' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::support'], [], [['text', '/supports'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/cours']], [], [], []],
    'parcours_admin_gestion_cours' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::parcoursList'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/mention']], [], [], []],
    'admin_cours' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::cours'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/parcours']], [], [], []],
    'admin_cours_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours']], [], [], []],
    'admin_audio_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::audio_supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/cours/audio']], [], [], []],
    'admin_fichier_support_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::support_supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/cours/fichier_support']], [], [], []],
    'admin_videos_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GestioncoursController::video_supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/gestionCours/cours/video']], [], [], []],
    'admin_inscrire_index' => [[], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::indexAction'], [], [['text', '/admin/inscription/']], [], [], []],
    'admin_inscrire_pdf' => [[], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::pdf'], [], [['text', '/admin/inscription/pdf/inscrit']], [], [], []],
    'admin_export_excel' => [[], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::export'], [], [['text', '/admin/inscription/exportExcel']], [], [], []],
    'admin_data_excel' => [[], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::importDataExcelAction'], [], [['text', '/admin/inscription/importExcel']], [], [], []],
    'admin_inscrire_new' => [[], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::newAction'], [], [['text', '/admin/inscription/new']], [], [], []],
    'adimn_inscrire_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InscriptionController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/inscription']], [], [], []],
    'inscrire_index' => [[], ['_controller' => 'App\\Controller\\Admin\\InscrireController::index'], [], [['text', '/admin/inscrire/']], [], [], []],
    'inscrire_new' => [[], ['_controller' => 'App\\Controller\\Admin\\InscrireController::new'], [], [['text', '/admin/inscrire/new']], [], [], []],
    'inscrire_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InscrireController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/inscrire']], [], [], []],
    'inscrire_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InscrireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/inscrire']], [], [], []],
    'inscrire_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\InscrireController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/inscrire']], [], [], []],
    'mention_index' => [[], ['_controller' => 'App\\Controller\\Admin\\MentionController::index'], [], [['text', '/admin/mention/']], [], [], []],
    'get-parc' => [[], ['_controller' => 'App\\Controller\\Admin\\MentionController::getParc'], [], [['text', '/admin/mention/get-parcours']], [], [], []],
    'mention_new' => [[], ['_controller' => 'App\\Controller\\Admin\\MentionController::new'], [], [['text', '/admin/mention/new']], [], [], []],
    'mention_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MentionController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/mention']], [], [], []],
    'mention_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MentionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/mention']], [], [], []],
    'mention_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MentionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/mention']], [], [], []],
    'parametre' => [[], ['_controller' => 'App\\Controller\\Admin\\ParametreController::index'], [], [['text', '/admin/parametre']], [], [], []],
    'parcours_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], [], [['text', '/admin/parcours/']], [], [], []],
    'parcours_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], [], [['text', '/admin/parcours/new']], [], [], []],
    'parcours_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ParcoursController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/parcours']], [], [], []],
    'parcours_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/parcours']], [], [], []],
    'parcours_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/parcours']], [], [], []],
    'admin_prof_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfController::index'], [], [['text', '/admin/prof']], [], [], []],
    'admin_prof_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfController::addNewProf'], [], [['text', '/admin/prof/new']], [], [], []],
    'admin_prof_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProfController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/prof']], [], [], []],
    'admin_prof_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProfController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/prof/delete']], [], [], []],
    'admin_profile' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfileController::editProfile'], [], [['text', '/admin/profile']], [], [], []],
    'admin_login' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController::login'], [], [['text', '/admin/login']], [], [], []],
    'admin_forgotten_password' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController::forgottenPassword'], [], [['text', '/admin/mot-de-passe-oubliee']], [], [], []],
    'admin_reset_password' => [['token'], ['_controller' => 'App\\Controller\\Admin\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/admin/reinitialiser-mot-de-passe']], [], [], []],
    'admin_activate_compte' => [['token'], ['_controller' => 'App\\Controller\\Admin\\SecurityController::activateCompte'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/admin/activate-compte']], [], [], []],
    'admin_logout' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], [], [['text', '/admin/logout']], [], [], []],
    'semestre_index' => [[], ['_controller' => 'App\\Controller\\Admin\\SemestreController::index'], [], [['text', '/admin/semestre/']], [], [], []],
    'semestre_new' => [[], ['_controller' => 'App\\Controller\\Admin\\SemestreController::new'], [], [['text', '/admin/semestre/new']], [], [], []],
    'semestre_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SemestreController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/semestre']], [], [], []],
    'semestre_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SemestreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/semestre']], [], [], []],
    'semestre_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SemestreController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/semestre']], [], [], []],
    'ue_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UeController::index'], [], [['text', '/admin/ue/']], [], [], []],
    'ue_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UeController::new'], [], [['text', '/admin/ue/new']], [], [], []],
    'ue_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/ue']], [], [], []],
    'ue_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/ue']], [], [], []],
    'ue_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/ue']], [], [], []],
    'years_index' => [[], ['_controller' => 'App\\Controller\\Admin\\YearsController::index'], [], [['text', '/admin/years/']], [], [], []],
    'years_new' => [[], ['_controller' => 'App\\Controller\\Admin\\YearsController::new'], [], [['text', '/admin/years/new']], [], [], []],
    'years_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\YearsController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/years']], [], [], []],
    'years_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\YearsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/years']], [], [], []],
    'years_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\YearsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/years']], [], [], []],
    'agenda_etudiant' => [[], ['_controller' => 'App\\Controller\\Etudiant\\AgendaController::index'], [], [['text', '/etudiant/agenda']], [], [], []],
    'etudiant' => [[], ['_controller' => 'App\\Controller\\Etudiant\\EtudiantController::index'], [], [['text', '/etudiant/tableau-de-bord']], [], [], []],
    'check_mle' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::Mle'], [], [['text', '/etudiant/Inscription/Mle']], [], [], []],
    'etudiant_inscription' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::inscription_mention'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Inscription']], [], [], []],
    'etudiant_reinscription' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::reinscription_mention'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Reinscription']], [], [], []],
    'etudiant_inscription_get_fee' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::getFee'], [], [['text', '/etudiant/get-fee']], [], [], []],
    'after_inscription' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::after_inscription'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Inscription/after_inscription']], [], [], []],
    'mention' => [[], ['_controller' => 'App\\Controller\\Etudiant\\MentionController::index'], [], [['text', '/etudiant/mention']], [], [], []],
    'mes_mentions' => [[], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::cours'], [], [['text', '/etudiant/Mentions']], [], [], []],
    'tableau_support' => [[], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::tableau'], [], [['text', '/etudiant/Mentions/tableau_support']], [], [], []],
    'mes_cours' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::Ue'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Mentions']], [], [], []],
    's1' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::s1'], [], [['text', '/s1'], ['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Mentions']], [], [], []],
    's2' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::s2'], [], [['text', '/s2'], ['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Mentions']], [], [], []],
    'cours' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::Cour'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Mentions/Ec/cours']], [], [], []],
    'delete_comment' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::del'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/Mentions/Ec/cours/commentaire']], [], [], []],
    'like_get_fee' => [[], ['_controller' => 'App\\Controller\\Etudiant\\MescoursController::getFee'], [], [['text', '/etudiant/Mentions/Ec/get-fee']], [], [], []],
    'etudiant_profil' => [[], ['_controller' => 'App\\Controller\\Etudiant\\ProfileController::editProfile'], [], [['text', '/etudiant/profile']], [], [], []],
    'etudiant_after_send_mail' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\NotificationController::notifyAfterResetLink'], [], [['text', '/reset-password']], [], [], []],
    'etudiant_after_inscription' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\NotificationController::notifyAfterInscription'], [], [['text', '/inscription-succes']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::login'], [], [['text', '/etudiant/login']], [], [], []],
    'etudiant_register' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::inscription'], [], [['text', '/etudiant/inscription']], [], [], []],
    'etudiant_forgotten_password' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::forgottenPassword'], [], [['text', '/etudiant/mot-de-passe-oubliee']], [], [], []],
    'etudiant_reset_password' => [['token'], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/etudiant/reinitialiser-mot-de-passe']], [], [], []],
    'etudiant_activate_compte' => [['token'], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::activateCompte'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/etudiant/activate-compte']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::logout'], [], [['text', '/etudiant/logout']], [], [], []],
    'etudiant_bookstore' => [[], ['_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::index'], [], [['text', '/etudiant/bookstore/']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/bookstore/panier/add']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/etudiant/bookstore/panier/remove']], [], [], []],
    'audio_index' => [[], ['_controller' => 'App\\Controller\\Prof\\AudioController::index'], [], [['text', '/prof/audio/']], [], [], []],
    'audio_new' => [['id'], ['_controller' => 'App\\Controller\\Prof\\AudioController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/audio/new']], [], [], []],
    'audio_edit' => [['id'], ['_controller' => 'App\\Controller\\Prof\\AudioController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/audio']], [], [], []],
    'audio_delete' => [['id'], ['_controller' => 'App\\Controller\\Prof\\AudioController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/audio']], [], [], []],
    'audio_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Prof\\AudioController::supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/audio']], [], [], []],
    'cours_index' => [[], ['_controller' => 'App\\Controller\\Prof\\CoursController::index'], [], [['text', '/prof/cours/']], [], [], []],
    'prof_bibliotheque' => [[], ['_controller' => 'App\\Controller\\Prof\\CoursController::bible'], [], [['text', '/prof/cours/bibliotheque']], [], [], []],
    'cours_new' => [[], ['_controller' => 'App\\Controller\\Prof\\CoursController::new'], [], [['text', '/prof/cours/new']], [], [], []],
    'cours_show' => [['id'], ['_controller' => 'App\\Controller\\Prof\\CoursController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/cours']], [], [], []],
    'cours_support' => [['id'], ['_controller' => 'App\\Controller\\Prof\\CoursController::support'], [], [['text', '/supports'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/cours']], [], [], []],
    'cours_delete' => [['id'], ['_controller' => 'App\\Controller\\Prof\\CoursController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/cours']], [], [], []],
    'prof_bibliotheque_delete' => [['id'], ['_controller' => 'App\\Controller\\Prof\\CoursController::supprimer'], [], [['text', '/supprimer/bibliotheque'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/cours']], [], [], []],
    'prof_bibliotheque_edit' => [['id'], ['_controller' => 'App\\Controller\\Prof\\CoursController::edit'], [], [['text', '/edit/bibliotheque'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/cours']], [], [], []],
    'prof_document' => [[], ['_controller' => 'App\\Controller\\Prof\\DocumentController::index'], [], [['text', '/prof/document']], [], [], []],
    'prof_document_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Prof\\DocumentController::supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/document']], [], [], []],
    'fichier_support_index' => [[], ['_controller' => 'App\\Controller\\Prof\\FichierSupportController::index'], [], [['text', '/prof/fichier/support/']], [], [], []],
    'fichier_support_delete' => [['id'], ['_controller' => 'App\\Controller\\Prof\\FichierSupportController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/fichier/support']], [], [], []],
    'fichier_support_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Prof\\FichierSupportController::supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/fichier/support']], [], [], []],
    'fichier_support_new' => [['id'], ['_controller' => 'App\\Controller\\Prof\\FichierSupportController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/fichier/support/new']], [], [], []],
    'fichier_support_edit' => [['id'], ['_controller' => 'App\\Controller\\Prof\\FichierSupportController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/fichier/support']], [], [], []],
    'prof_mes_agenda' => [[], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::index'], [], [['text', '/prof/mes_agenda/']], [], [], []],
    'prof_api_event_edit' => [['id'], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::majEvent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/mes_agenda/api']], [], [], []],
    'prof_new_event' => [[], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::newEvent'], [], [['text', '/prof/mes_agenda/new/event']], [], [], []],
    'prof_mes_agenda_event_delete' => [[], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::deleteAction'], [], [['text', '/prof/mes_agenda/suppression/cours']], [], [], []],
    'prof_imprimer_pdf' => [[], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::pdf'], [], [['text', '/prof/mes_agenda/imprimer']], [], [], []],
    'prof_edit_evenement' => [['id'], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/mes_agenda']], [], [], []],
    'prof_mes_agenda_list' => [[], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::list'], [], [['text', '/prof/mes_agenda/list']], [], [], []],
    'prof_mes_agenda_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Prof\\MesAgendaController::delete'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/mes_agenda']], [], [], []],
    'prof_cours' => [['id'], ['_controller' => 'App\\Controller\\Prof\\MesCoursController::cours'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/mes-cours']], [], [], []],
    'prof_ajout_cours' => [['id'], ['_controller' => 'App\\Controller\\Prof\\MesCoursController::ajout'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/ajout-cours']], [], [], []],
    'prof_mentions' => [[], ['_controller' => 'App\\Controller\\Prof\\MesCoursController::mention'], [], [['text', '/prof/mes-mentions']], [], [], []],
    'prof_dashbord' => [[], ['_controller' => 'App\\Controller\\Prof\\ProfController::index'], [], [['text', '/prof/tableau-de-bord']], [], [], []],
    'prof_commenter' => [['id'], ['_controller' => 'App\\Controller\\Prof\\ProfController::Cour'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/commentaire/cours']], [], [], []],
    'prof_suprimer_comment' => [['id'], ['_controller' => 'App\\Controller\\Prof\\ProfController::del'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/commentaire']], [], [], []],
    'prof-get-parc' => [[], ['_controller' => 'App\\Controller\\Prof\\ProfController::getParc'], [], [['text', '/prof/get-parcours']], [], [], []],
    'prof_profil' => [[], ['_controller' => 'App\\Controller\\Prof\\ProfileController::editProfile'], [], [['text', '/prof/profil']], [], [], []],
    'prof_after_send_mail' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\NotificationController::notifyAfterResetLink'], [], [['text', '/prof/reset-password']], [], [], []],
    'prof_after_inscription' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\NotificationController::notifyAfterInscription'], [], [['text', '/prof/inscription-succes']], [], [], []],
    'prof_login' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::login'], [], [['text', '/prof/login']], [], [], []],
    'prof_register' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::inscription'], [], [['text', '/prof/inscription']], [], [], []],
    'prof_forgotten_password' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::forgottenPassword'], [], [['text', '/prof/mot-de-passe-oubliee']], [], [], []],
    'prof_reset_password' => [['token'], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/prof/reinitialiser-mot-de-passe']], [], [], []],
    'prof_activate_compte' => [['token'], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::activateCompte'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/prof/activate-compte']], [], [], []],
    'prof_logout' => [[], ['_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::logout'], [], [['text', '/prof/logout']], [], [], []],
    'videos_index' => [[], ['_controller' => 'App\\Controller\\Prof\\VideosController::index'], [], [['text', '/prof/videos/']], [], [], []],
    'videos_new' => [['id'], ['_controller' => 'App\\Controller\\Prof\\VideosController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/videos/new']], [], [], []],
    'videos_edit' => [['id'], ['_controller' => 'App\\Controller\\Prof\\VideosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/videos']], [], [], []],
    'videos_supprimer' => [['id'], ['_controller' => 'App\\Controller\\Prof\\VideosController::supprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id'], ['text', '/prof/videos']], [], [], []],
    'videos_delete' => [['id'], ['_controller' => 'App\\Controller\\Prof\\VideosController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/prof/videos']], [], [], []],
    'vitrine' => [[], ['_controller' => 'App\\Controller\\Vitrine\\VitrineController::index'], [], [['text', '/']], [], [], []],
    'quisommesnous' => [[], ['_controller' => 'App\\Controller\\Vitrine\\VitrineController::quisommesnous'], [], [['text', '/qui-sommes-nous']], [], [], []],
    'presentation' => [[], ['_controller' => 'App\\Controller\\Vitrine\\VitrineController::presentation'], [], [['text', '/presentation']], [], [], []],
    'enseignant' => [[], ['_controller' => 'App\\Controller\\Vitrine\\VitrineController::enseignant'], [], [['text', '/enseignants']], [], [], []],
    'fos_js_routing_js' => [['_format'], ['_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format' => 'js|json'], [['variable', '.', 'js|json', '_format'], ['text', '/js/routing']], [], [], []],
];
