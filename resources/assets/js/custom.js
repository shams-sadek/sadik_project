$(function () {

    /*
     * DatePicker
     * Change Format BD style
     */

    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });


    /*
     * flash message
     */

    $(".alert").fadeTo(2000, 500).fadeOut(500, function () {
        $(".alert").alert('close');
    });


    /* ############### DataTables Start ################### */

    /*
     * Jquery DataTables Initialization
     * Ajax
     * Ajax url Dynamic From Table attribute data-url
     */

    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#dataTable').data('url')
    });


    /*
     * Select2
     */

    $('.select2').select2();

    /*
     * DataTables Dynamic Delete Form preventDefault()
     * Delete Table Row By Delete Form
     */


    /*
     * BootBox ModalBox Plugins
     *
     */
    $(document).on("submit", "form[data-bb]", function (e) {

        e.preventDefault();

        var currentForm = this;

        bootbox.dialog({
            title: '<img src="images/question1.jpeg" width="22px"/> <span style="color:darkred;">Warning Message ...</span>',
            message: '<img src="images/question.jpeg" width="60px"/> <b style="color: darkred;"> Are You Sure To Delete ?</b>',
            buttons: {
                delete: {
                    label: " Delete",
                    className: "btn-danger glyphicon glyphicon-trash",
                    callback: function() {
                        currentForm.submit();
                    }
                },
                cancel: {
                    label: " Cancel",
                    className: "btn glyphicon glyphicon-remove",
                    callback: function() {
                        //console.log('Cancel')
                    }
                }
            }
        });

    });

});



