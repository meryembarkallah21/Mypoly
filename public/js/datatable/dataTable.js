
    $(document).ready(function () {

        var  dataTable =  $('#dataTable').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "aucune donnée trouvée",
                "info": "affichage de _START_ à _END_ sur _TOTAL_ élément(s)",
                "infoEmpty": "affichage 0 par 0 sur 0 élement(s) trouvé(s)",
                "infoFiltered": "",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Nombre d'affichage _MENU_ ",
                "loadingRecords": "Loading...",
                "processing": "Processing...",
                "search": "Recherche:",
                "zeroRecords": "aucun élément trouvé",
                "paginate": {
                    "first": "premier",
                    "last": "dernier",
                    "next": "Suivant",
                    "previous": "Précédant"
                }
            }
        });

        var sujet_table =  $('#sujet-dataTable').DataTable({
        "language": {
        "decimal": "",
        "emptyTable": "aucune donnée trouvée",
        "info": "affichage de _START_ à _END_ sur _TOTAL_ élément(s)",
        "infoEmpty": "affichage 0 par 0 sur 0 élement(s) trouvé(s)",
        "infoFiltered": "",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Nombre d'affichage _MENU_ ",
        "loadingRecords": "Loading...",
        "processing": "Processing...",
        "search": "Recherche:",
        "zeroRecords": "aucun élément trouvé",
        "paginate": {
        "first": "premier",
        "last": "dernier",
        "next": "Suivant",
        "previous": "Précédant"
        }
        }
        });

            var exercice_table = $('#exercice-dataTable').DataTable({
            "language": {
            "decimal": "",
            "emptyTable": "aucune donnée trouvée",
            "info": "affichage de _START_ à _END_ sur _TOTAL_ élément(s)",
            "infoEmpty": "affichage 0 par 0 sur 0 élement(s) trouvé(s)",
            "infoFiltered": "",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Nombre d'affichage _MENU_ ",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "search": "Recherche:",
            "zeroRecords": "aucun élément trouvé",
            "paginate": {
            "first": "premier",
            "last": "dernier",
            "next": "Suivant",
            "previous": "Précédant"
        }
        }
        });

        var corrige_table =  $('#corrige-dataTable').DataTable({
        "language": {
        "decimal": "",
        "emptyTable": "aucune donnée trouvée",
        "info": "affichage de _START_ à _END_ sur _TOTAL_ élément(s)",
        "infoEmpty": "affichage 0 par 0 sur 0 élement(s) trouvé(s)",
        "infoFiltered": "",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Nombre d'affichage _MENU_ ",
        "loadingRecords": "Loading...",
        "processing": "Processing...",
        "search": "Recherche:",
        "zeroRecords": "aucun élément trouvé",
        "paginate": {
        "first": "premier",
        "last": "dernier",
        "next": "Suivant",
        "previous": "Précédant"
    }
    }
    });

        var administration_table =  $('#administration-dataTable').DataTable({
        "language": {
        "decimal": "",
        "emptyTable": "aucune donnée trouvée",
        "info": "affichage de _START_ à _END_ sur _TOTAL_ élément(s)",
        "infoEmpty": "affichage 0 par 0 sur 0 élement(s) trouvé(s)",
        "infoFiltered": "",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Nombre d'affichage _MENU_ ",
        "loadingRecords": "Loading...",
        "processing": "Processing...",
        "search": "Recherche:",
        "zeroRecords": "aucun élément trouvé",
        "paginate": {
        "first": "premier",
        "last": "dernier",
        "next": "Suivant",
        "previous": "Précédant"
    }
    }
    });


});
