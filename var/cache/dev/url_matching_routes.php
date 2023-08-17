<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/admin' => [[['_route' => 'admin_admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/admin/new' => [[['_route' => 'admin_admin_new', '_controller' => 'App\\Controller\\Admin\\AdminController::addNewadmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/agendas' => [[['_route' => 'admin_agendas', '_controller' => 'App\\Controller\\Admin\\AgendasController::index'], null, null, null, true, false, null]],
        '/admin/agendas/new/event' => [[['_route' => 'new_event', '_controller' => 'App\\Controller\\Admin\\AgendasController::newEvent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/agendas/suppression/cours' => [[['_route' => 'calendrier_delete', '_controller' => 'App\\Controller\\Admin\\AgendasController::deleteAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agendas/imprimer/pdf' => [[['_route' => 'imprimer_pdf', '_controller' => 'App\\Controller\\Admin\\AgendasController::pdf'], null, null, null, false, false, null]],
        '/admin/agendas/list' => [[['_route' => 'admin_agendas_list', '_controller' => 'App\\Controller\\Admin\\AgendasController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/bibliotheque' => [[['_route' => 'admin_bibliotheque_index', '_controller' => 'App\\Controller\\Admin\\BibliothequeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/bibliotheque/new' => [[['_route' => 'admin_bibliotheque_new', '_controller' => 'App\\Controller\\Admin\\BibliothequeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/code' => [[['_route' => 'code_index', '_controller' => 'App\\Controller\\Admin\\CodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/code/new' => [[['_route' => 'code_new', '_controller' => 'App\\Controller\\Admin\\CodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/cycle' => [[['_route' => 'cycle_index', '_controller' => 'App\\Controller\\Admin\\CycleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cycle/new' => [[['_route' => 'cycle_new', '_controller' => 'App\\Controller\\Admin\\CycleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/document' => [[['_route' => 'admin_document', '_controller' => 'App\\Controller\\Admin\\DocumentController::index'], null, null, null, false, false, null]],
        '/admin/ec' => [[['_route' => 'ec_index', '_controller' => 'App\\Controller\\Admin\\EcController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ec/new' => [[['_route' => 'ec_new', '_controller' => 'App\\Controller\\Admin\\EcController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/gestionCours/index' => [[['_route' => 'index_admin_gestion_cours', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'admin_inscrire_index', '_controller' => 'App\\Controller\\Admin\\InscriptionController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/admin/inscription/pdf/inscrit' => [[['_route' => 'admin_inscrire_pdf', '_controller' => 'App\\Controller\\Admin\\InscriptionController::pdf'], null, ['POST' => 0], null, false, false, null]],
        '/admin/inscription/exportExcel' => [[['_route' => 'admin_export_excel', '_controller' => 'App\\Controller\\Admin\\InscriptionController::export'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/admin/inscription/importExcel' => [[['_route' => 'admin_data_excel', '_controller' => 'App\\Controller\\Admin\\InscriptionController::importDataExcelAction'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/admin/inscription/new' => [[['_route' => 'admin_inscrire_new', '_controller' => 'App\\Controller\\Admin\\InscriptionController::newAction'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/admin/inscrire' => [[['_route' => 'inscrire_index', '_controller' => 'App\\Controller\\Admin\\InscrireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/inscrire/new' => [[['_route' => 'inscrire_new', '_controller' => 'App\\Controller\\Admin\\InscrireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mention' => [[['_route' => 'mention_index', '_controller' => 'App\\Controller\\Admin\\MentionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/mention/get-parcours' => [[['_route' => 'get-parc', '_controller' => 'App\\Controller\\Admin\\MentionController::getParc'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mention/new' => [[['_route' => 'mention_new', '_controller' => 'App\\Controller\\Admin\\MentionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'parametre', '_controller' => 'App\\Controller\\Admin\\ParametreController::index'], null, null, null, false, false, null]],
        '/admin/parcours' => [[['_route' => 'parcours_index', '_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/parcours/new' => [[['_route' => 'parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/prof' => [[['_route' => 'admin_prof_index', '_controller' => 'App\\Controller\\Admin\\ProfController::index'], null, null, null, false, false, null]],
        '/admin/prof/new' => [[['_route' => 'admin_prof_new', '_controller' => 'App\\Controller\\Admin\\ProfController::addNewProf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\Admin\\ProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/mot-de-passe-oubliee' => [[['_route' => 'admin_forgotten_password', '_controller' => 'App\\Controller\\Admin\\SecurityController::forgottenPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/semestre' => [[['_route' => 'semestre_index', '_controller' => 'App\\Controller\\Admin\\SemestreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/semestre/new' => [[['_route' => 'semestre_new', '_controller' => 'App\\Controller\\Admin\\SemestreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ue' => [[['_route' => 'ue_index', '_controller' => 'App\\Controller\\Admin\\UeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ue/new' => [[['_route' => 'ue_new', '_controller' => 'App\\Controller\\Admin\\UeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/years' => [[['_route' => 'years_index', '_controller' => 'App\\Controller\\Admin\\YearsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/years/new' => [[['_route' => 'years_new', '_controller' => 'App\\Controller\\Admin\\YearsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/agenda' => [[['_route' => 'agenda_etudiant', '_controller' => 'App\\Controller\\Etudiant\\AgendaController::index'], null, null, null, false, false, null]],
        '/etudiant/tableau-de-bord' => [[['_route' => 'etudiant', '_controller' => 'App\\Controller\\Etudiant\\EtudiantController::index'], null, null, null, false, false, null]],
        '/etudiant/Inscription/Mle' => [[['_route' => 'check_mle', '_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::Mle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/get-fee' => [[['_route' => 'etudiant_inscription_get_fee', '_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::getFee'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/mention' => [[['_route' => 'mention', '_controller' => 'App\\Controller\\Etudiant\\MentionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/etudiant/Mentions' => [[['_route' => 'mes_mentions', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::cours'], null, ['GET' => 0], null, false, false, null]],
        '/etudiant/Mentions/tableau_support' => [[['_route' => 'tableau_support', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::tableau'], null, ['GET' => 0], null, false, false, null]],
        '/etudiant/Mentions/Ec/get-fee' => [[['_route' => 'like_get_fee', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::getFee'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/profile' => [[['_route' => 'etudiant_profil', '_controller' => 'App\\Controller\\Etudiant\\ProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'etudiant_after_send_mail', '_controller' => 'App\\Controller\\Etudiant\\Security\\NotificationController::notifyAfterResetLink'], null, null, null, false, false, null]],
        '/inscription-succes' => [[['_route' => 'etudiant_after_inscription', '_controller' => 'App\\Controller\\Etudiant\\Security\\NotificationController::notifyAfterInscription'], null, null, null, false, false, null]],
        '/etudiant/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/etudiant/inscription' => [[['_route' => 'etudiant_register', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/mot-de-passe-oubliee' => [[['_route' => 'etudiant_forgotten_password', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::forgottenPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/etudiant/bookstore' => [[['_route' => 'etudiant_bookstore', '_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::index'], null, null, null, true, false, null]],
        '/prof/audio' => [[['_route' => 'audio_index', '_controller' => 'App\\Controller\\Prof\\AudioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prof/cours' => [[['_route' => 'cours_index', '_controller' => 'App\\Controller\\Prof\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prof/cours/bibliotheque' => [[['_route' => 'prof_bibliotheque', '_controller' => 'App\\Controller\\Prof\\CoursController::bible'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/cours/new' => [[['_route' => 'cours_new', '_controller' => 'App\\Controller\\Prof\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/document' => [[['_route' => 'prof_document', '_controller' => 'App\\Controller\\Prof\\DocumentController::index'], null, null, null, false, false, null]],
        '/prof/fichier/support' => [[['_route' => 'fichier_support_index', '_controller' => 'App\\Controller\\Prof\\FichierSupportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prof/mes_agenda' => [[['_route' => 'prof_mes_agenda', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prof/mes_agenda/new/event' => [[['_route' => 'prof_new_event', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::newEvent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/mes_agenda/suppression/cours' => [[['_route' => 'prof_mes_agenda_event_delete', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::deleteAction'], null, ['GET' => 0], null, false, false, null]],
        '/prof/mes_agenda/imprimer' => [[['_route' => 'prof_imprimer_pdf', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/prof/mes_agenda/list' => [[['_route' => 'prof_mes_agenda_list', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::list'], null, ['GET' => 0], null, false, false, null]],
        '/prof/mes-mentions' => [[['_route' => 'prof_mentions', '_controller' => 'App\\Controller\\Prof\\MesCoursController::mention'], null, null, null, false, false, null]],
        '/prof/tableau-de-bord' => [[['_route' => 'prof_dashbord', '_controller' => 'App\\Controller\\Prof\\ProfController::index'], null, null, null, false, false, null]],
        '/prof/get-parcours' => [[['_route' => 'prof-get-parc', '_controller' => 'App\\Controller\\Prof\\ProfController::getParc'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/profil' => [[['_route' => 'prof_profil', '_controller' => 'App\\Controller\\Prof\\ProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/reset-password' => [[['_route' => 'prof_after_send_mail', '_controller' => 'App\\Controller\\Prof\\Security\\NotificationController::notifyAfterResetLink'], null, null, null, false, false, null]],
        '/prof/inscription-succes' => [[['_route' => 'prof_after_inscription', '_controller' => 'App\\Controller\\Prof\\Security\\NotificationController::notifyAfterInscription'], null, null, null, false, false, null]],
        '/prof/login' => [[['_route' => 'prof_login', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/prof/inscription' => [[['_route' => 'prof_register', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/mot-de-passe-oubliee' => [[['_route' => 'prof_forgotten_password', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::forgottenPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/logout' => [[['_route' => 'prof_logout', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/prof/videos' => [[['_route' => 'videos_index', '_controller' => 'App\\Controller\\Prof\\VideosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'vitrine', '_controller' => 'App\\Controller\\Vitrine\\VitrineController::index'], null, null, null, false, false, null]],
        '/qui-sommes-nous' => [[['_route' => 'quisommesnous', '_controller' => 'App\\Controller\\Vitrine\\VitrineController::quisommesnous'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\Vitrine\\VitrineController::presentation'], null, null, null, false, false, null]],
        '/enseignants' => [[['_route' => 'enseignant', '_controller' => 'App\\Controller\\Vitrine\\VitrineController::enseignant'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|a(?'
                        .'|dmin/(?'
                            .'|([^/]++)/edit(*:204)'
                            .'|delete/([^/]++)(*:227)'
                        .')'
                        .'|gendas/(?'
                            .'|api/([^/]++)/edit(*:263)'
                            .'|([^/]++)/(?'
                                .'|edit(*:287)'
                                .'|supprimer(*:304)'
                            .')'
                        .')'
                        .'|ctivate\\-compte/([^/]++)(*:338)'
                    .')'
                    .'|bibliotheque/([^/]++)(?'
                        .'|(*:371)'
                        .'|/edit(*:384)'
                        .'|(*:392)'
                    .')'
                    .'|c(?'
                        .'|ode/([^/]++)(?'
                            .'|(*:420)'
                            .'|/edit(*:433)'
                            .'|(*:441)'
                        .')'
                        .'|ycle/([^/]++)(?'
                            .'|(*:466)'
                            .'|/edit(*:479)'
                            .'|(*:487)'
                        .')'
                    .')'
                    .'|e(?'
                        .'|tudiant/(?'
                            .'|liste/([^/]++)/([^/]++)(*:535)'
                            .'|index/([^/]++)/([^/]++)(*:566)'
                            .'|profil/([^/]++)(*:589)'
                            .'|delete/profil/([^/]++)(*:619)'
                        .')'
                        .'|c/([^/]++)(?'
                            .'|(*:641)'
                            .'|/edit(*:654)'
                            .'|(*:662)'
                        .')'
                    .')'
                    .'|document/([^/]++)(*:689)'
                    .'|gestionCours/(?'
                        .'|([^/]++)(*:721)'
                        .'|cours/([^/]++)/supports(*:752)'
                        .'|mention/([^/]++)(*:776)'
                        .'|parcours/([^/]++)(*:801)'
                        .'|([^/]++)/edit(*:822)'
                        .'|cours/(?'
                            .'|audio/([^/]++)/supprimer(*:863)'
                            .'|fichier_support/([^/]++)/supprimer(*:905)'
                            .'|video/([^/]++)/supprimer(*:937)'
                        .')'
                    .')'
                    .'|inscri(?'
                        .'|ption/([^/]++)/delete(*:977)'
                        .'|re/([^/]++)(?'
                            .'|(*:999)'
                            .'|/edit(*:1012)'
                            .'|(*:1021)'
                        .')'
                    .')'
                    .'|mention/([^/]++)(?'
                        .'|(*:1051)'
                        .'|/edit(*:1065)'
                        .'|(*:1074)'
                    .')'
                    .'|p(?'
                        .'|arcours/([^/]++)(?'
                            .'|(*:1107)'
                            .'|/edit(*:1121)'
                            .'|(*:1130)'
                        .')'
                        .'|rof/(?'
                            .'|([^/]++)/edit(*:1160)'
                            .'|delete/([^/]++)(*:1184)'
                        .')'
                    .')'
                    .'|reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:1233)'
                    .'|semestre/([^/]++)(?'
                        .'|(*:1262)'
                        .'|/edit(*:1276)'
                        .'|(*:1285)'
                    .')'
                    .'|ue/([^/]++)(?'
                        .'|(*:1309)'
                        .'|/edit(*:1323)'
                        .'|(*:1332)'
                    .')'
                    .'|years/([^/]++)(?'
                        .'|(*:1359)'
                        .'|/edit(*:1373)'
                        .'|(*:1382)'
                    .')'
                .')'
                .'|/etudiant/(?'
                    .'|Inscription/(?'
                        .'|([^/]++)(*:1429)'
                        .'|after_inscription/([^/]++)(*:1464)'
                    .')'
                    .'|Reinscription/([^/]++)(*:1496)'
                    .'|Mentions/(?'
                        .'|([^/]++)(?'
                            .'|(*:1528)'
                            .'|/s(?'
                                .'|1(*:1543)'
                                .'|2(*:1553)'
                            .')'
                        .')'
                        .'|Ec/cours/(?'
                            .'|([^/]++)(*:1584)'
                            .'|commentaire/([^/]++)(*:1613)'
                        .')'
                    .')'
                    .'|reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:1662)'
                    .'|activate\\-compte/([^/]++)(*:1696)'
                    .'|bookstore/panier/(?'
                        .'|add/([^/]++)(*:1737)'
                        .'|remove/([^/]++)(*:1761)'
                    .')'
                .')'
                .'|/prof/(?'
                    .'|a(?'
                        .'|udio/(?'
                            .'|new/([^/]++)(*:1805)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1833)'
                                    .'|supprimer(*:1851)'
                                .')'
                                .'|(*:1861)'
                            .')'
                        .')'
                        .'|jout\\-cours/([^/]++)(*:1892)'
                        .'|ctivate\\-compte/([^/]++)(*:1925)'
                    .')'
                    .'|co(?'
                        .'|urs/([^/]++)(?'
                            .'|(*:1955)'
                            .'|/(?'
                                .'|supp(?'
                                    .'|orts(*:1979)'
                                    .'|rimer/bibliotheque(*:2006)'
                                .')'
                                .'|edit/bibliotheque(*:2033)'
                            .')'
                            .'|(*:2043)'
                        .')'
                        .'|mmentaire/(?'
                            .'|cours/([^/]++)(*:2080)'
                            .'|([^/]++)/supprimer(*:2107)'
                        .')'
                    .')'
                    .'|document/([^/]++)(*:2135)'
                    .'|fichier/support/(?'
                        .'|([^/]++)(?'
                            .'|(*:2174)'
                            .'|/supprimer(*:2193)'
                        .')'
                        .'|new/([^/]++)(*:2215)'
                        .'|([^/]++)/edit(*:2237)'
                    .')'
                    .'|mes(?'
                        .'|_agenda/(?'
                            .'|api/([^/]++)/edit(*:2281)'
                            .'|([^/]++)/(?'
                                .'|edit(*:2306)'
                                .'|supprimer(*:2324)'
                            .')'
                        .')'
                        .'|\\-cours/([^/]++)(*:2351)'
                    .')'
                    .'|reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:2399)'
                    .'|videos/(?'
                        .'|new/([^/]++)(*:2430)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:2458)'
                                .'|supprimer(*:2476)'
                            .')'
                            .'|(*:2486)'
                        .')'
                    .')'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:2525)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'admin_admin_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        227 => [[['_route' => 'admin_admin_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        263 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\Admin\\AgendasController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        287 => [[['_route' => 'admin_edit_evenement', '_controller' => 'App\\Controller\\Admin\\AgendasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'admin_agendas_supprimer', '_controller' => 'App\\Controller\\Admin\\AgendasController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        338 => [[['_route' => 'admin_activate_compte', '_controller' => 'App\\Controller\\Admin\\SecurityController::activateCompte'], ['token'], null, null, false, true, null]],
        371 => [[['_route' => 'admin_bibliotheque_show', '_controller' => 'App\\Controller\\Admin\\BibliothequeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'admin_bibliotheque_edit', '_controller' => 'App\\Controller\\Admin\\BibliothequeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'admin_bibliotheque_delete', '_controller' => 'App\\Controller\\Admin\\BibliothequeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'code_show', '_controller' => 'App\\Controller\\Admin\\CodeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'code_edit', '_controller' => 'App\\Controller\\Admin\\CodeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'code_delete', '_controller' => 'App\\Controller\\Admin\\CodeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'cycle_show', '_controller' => 'App\\Controller\\Admin\\CycleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'cycle_edit', '_controller' => 'App\\Controller\\Admin\\CycleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'cycle_delete', '_controller' => 'App\\Controller\\Admin\\CycleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        535 => [[['_route' => 'liste_etudiant', '_controller' => 'App\\Controller\\Admin\\DashboardController::liste'], ['id', 'cycle'], ['GET' => 0], null, false, true, null]],
        566 => [[['_route' => 'list_etudiant', '_controller' => 'App\\Controller\\Admin\\DashboardController::list'], ['id', 'name'], ['GET' => 0], null, false, true, null]],
        589 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\Admin\\DashboardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        619 => [[['_route' => 'profil_delete', '_controller' => 'App\\Controller\\Admin\\DashboardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        641 => [[['_route' => 'ec_show', '_controller' => 'App\\Controller\\Admin\\EcController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        654 => [[['_route' => 'ec_edit', '_controller' => 'App\\Controller\\Admin\\EcController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        662 => [[['_route' => 'ec_delete', '_controller' => 'App\\Controller\\Admin\\EcController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        689 => [[['_route' => 'admin_document_supprimer', '_controller' => 'App\\Controller\\Admin\\DocumentController::supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        721 => [[['_route' => 'admin_cours_show', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        752 => [[['_route' => 'admin_cours_support', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::support'], ['id'], ['GET' => 0], null, false, false, null]],
        776 => [[['_route' => 'parcours_admin_gestion_cours', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::parcoursList'], ['id'], ['GET' => 0], null, false, true, null]],
        801 => [[['_route' => 'admin_cours', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::cours'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        822 => [[['_route' => 'admin_cours_edit', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        863 => [[['_route' => 'admin_audio_supprimer', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::audio_supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        905 => [[['_route' => 'admin_fichier_support_supprimer', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::support_supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        937 => [[['_route' => 'admin_videos_supprimer', '_controller' => 'App\\Controller\\Admin\\GestioncoursController::video_supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        977 => [[['_route' => 'adimn_inscrire_delete', '_controller' => 'App\\Controller\\Admin\\InscriptionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        999 => [[['_route' => 'inscrire_show', '_controller' => 'App\\Controller\\Admin\\InscrireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1012 => [[['_route' => 'inscrire_edit', '_controller' => 'App\\Controller\\Admin\\InscrireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1021 => [[['_route' => 'inscrire_delete', '_controller' => 'App\\Controller\\Admin\\InscrireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1051 => [[['_route' => 'mention_show', '_controller' => 'App\\Controller\\Admin\\MentionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1065 => [[['_route' => 'mention_edit', '_controller' => 'App\\Controller\\Admin\\MentionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1074 => [[['_route' => 'mention_delete', '_controller' => 'App\\Controller\\Admin\\MentionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1107 => [[['_route' => 'parcours_show', '_controller' => 'App\\Controller\\Admin\\ParcoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1121 => [[['_route' => 'parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1130 => [[['_route' => 'parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1160 => [[['_route' => 'admin_prof_edit', '_controller' => 'App\\Controller\\Admin\\ProfController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1184 => [[['_route' => 'admin_prof_delete', '_controller' => 'App\\Controller\\Admin\\ProfController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1233 => [[['_route' => 'admin_reset_password', '_controller' => 'App\\Controller\\Admin\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1262 => [[['_route' => 'semestre_show', '_controller' => 'App\\Controller\\Admin\\SemestreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1276 => [[['_route' => 'semestre_edit', '_controller' => 'App\\Controller\\Admin\\SemestreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1285 => [[['_route' => 'semestre_delete', '_controller' => 'App\\Controller\\Admin\\SemestreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1309 => [[['_route' => 'ue_show', '_controller' => 'App\\Controller\\Admin\\UeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1323 => [[['_route' => 'ue_edit', '_controller' => 'App\\Controller\\Admin\\UeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1332 => [[['_route' => 'ue_delete', '_controller' => 'App\\Controller\\Admin\\UeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1359 => [[['_route' => 'years_show', '_controller' => 'App\\Controller\\Admin\\YearsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1373 => [[['_route' => 'years_edit', '_controller' => 'App\\Controller\\Admin\\YearsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1382 => [[['_route' => 'years_delete', '_controller' => 'App\\Controller\\Admin\\YearsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1429 => [[['_route' => 'etudiant_inscription', '_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::inscription_mention'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1464 => [[['_route' => 'after_inscription', '_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::after_inscription'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1496 => [[['_route' => 'etudiant_reinscription', '_controller' => 'App\\Controller\\Etudiant\\Inscription\\InscriptionMentionController::reinscription_mention'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1528 => [[['_route' => 'mes_cours', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::Ue'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1543 => [[['_route' => 's1', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::s1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1553 => [[['_route' => 's2', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::s2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1584 => [[['_route' => 'cours', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::Cour'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1613 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\Etudiant\\MescoursController::del'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1662 => [[['_route' => 'etudiant_reset_password', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1696 => [[['_route' => 'etudiant_activate_compte', '_controller' => 'App\\Controller\\Etudiant\\Security\\SecurityController::activateCompte'], ['token'], null, null, false, true, null]],
        1737 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::add'], ['id'], null, null, false, true, null]],
        1761 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\Etudiant\\bookstore\\BookstoreController::remove'], ['id'], null, null, false, true, null]],
        1805 => [[['_route' => 'audio_new', '_controller' => 'App\\Controller\\Prof\\AudioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1833 => [[['_route' => 'audio_edit', '_controller' => 'App\\Controller\\Prof\\AudioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1851 => [[['_route' => 'audio_supprimer', '_controller' => 'App\\Controller\\Prof\\AudioController::supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1861 => [[['_route' => 'audio_delete', '_controller' => 'App\\Controller\\Prof\\AudioController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1892 => [[['_route' => 'prof_ajout_cours', '_controller' => 'App\\Controller\\Prof\\MesCoursController::ajout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1925 => [[['_route' => 'prof_activate_compte', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::activateCompte'], ['token'], null, null, false, true, null]],
        1955 => [[['_route' => 'cours_show', '_controller' => 'App\\Controller\\Prof\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1979 => [[['_route' => 'cours_support', '_controller' => 'App\\Controller\\Prof\\CoursController::support'], ['id'], ['GET' => 0], null, false, false, null]],
        2006 => [[['_route' => 'prof_bibliotheque_delete', '_controller' => 'App\\Controller\\Prof\\CoursController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        2033 => [[['_route' => 'prof_bibliotheque_edit', '_controller' => 'App\\Controller\\Prof\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2043 => [[['_route' => 'cours_delete', '_controller' => 'App\\Controller\\Prof\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2080 => [[['_route' => 'prof_commenter', '_controller' => 'App\\Controller\\Prof\\ProfController::Cour'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2107 => [[['_route' => 'prof_suprimer_comment', '_controller' => 'App\\Controller\\Prof\\ProfController::del'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2135 => [[['_route' => 'prof_document_supprimer', '_controller' => 'App\\Controller\\Prof\\DocumentController::supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2174 => [[['_route' => 'fichier_support_delete', '_controller' => 'App\\Controller\\Prof\\FichierSupportController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2193 => [[['_route' => 'fichier_support_supprimer', '_controller' => 'App\\Controller\\Prof\\FichierSupportController::supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2215 => [[['_route' => 'fichier_support_new', '_controller' => 'App\\Controller\\Prof\\FichierSupportController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2237 => [[['_route' => 'fichier_support_edit', '_controller' => 'App\\Controller\\Prof\\FichierSupportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2281 => [[['_route' => 'prof_api_event_edit', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        2306 => [[['_route' => 'prof_edit_evenement', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2324 => [[['_route' => 'prof_mes_agenda_supprimer', '_controller' => 'App\\Controller\\Prof\\MesAgendaController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2351 => [[['_route' => 'prof_cours', '_controller' => 'App\\Controller\\Prof\\MesCoursController::cours'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2399 => [[['_route' => 'prof_reset_password', '_controller' => 'App\\Controller\\Prof\\Security\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        2430 => [[['_route' => 'videos_new', '_controller' => 'App\\Controller\\Prof\\VideosController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2458 => [[['_route' => 'videos_edit', '_controller' => 'App\\Controller\\Prof\\VideosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2476 => [[['_route' => 'videos_supprimer', '_controller' => 'App\\Controller\\Prof\\VideosController::supprimer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2486 => [[['_route' => 'videos_delete', '_controller' => 'App\\Controller\\Prof\\VideosController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2525 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
