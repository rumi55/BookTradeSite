
$(document).ready(function() {
    $("#user_post_datatable").dataTable({
        aLengthMenu: [[5, 10, 25, 50, 100, 500, 1000], [5, 10, 25, 50, 100, 500, 1000]],
        iDisplayLength: 5,
        sPaginationType: "full_numbers",
        bProcessing: true,
        oLanguage: {
            sProcessing: "Retrieving all post...",
            sLengthMenu: "Showing _MENU_ entries &nbsp;",
            sInfo: "(_START_ to _END_ of _TOTAL_ total)"
        },
        aoColumns: [
            {"title": "Post ID"},
            {"title": "User ID"},
            {"title": "ISBN ID"},
            {"title": "Title"},
            {"title": "Class"},
            {"title": "Author"},
            {"title": "Edition"},
            {"title": "Condition"},
            {"title": "Price"},
            {"title": "Contact"},
            {"title": "Comments"}
        ],
        bJQueryUI: false,
        sDom: '<"H"fli><"proc1"r>t<"proc2"r><"F"pli>',
        aaSorting: [[0, "asc"]],
        bServerSide: true,
        sAjaxSource: "includes/php/tables/serverside_processing_user_post.php",
        bDeferRender: true
    });
});