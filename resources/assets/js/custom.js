$(function () {

    /* *
     * ---------------------------------------------
     * DatePicker
     * ---------------------------------------------
     * Change Format BD style
     */

    //var minDate = '2016/03/05';

    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY',
        //minDate: '2016/03/05',
        minDate: minDate,
        maxDate: '2016/04/05'
    });


    /*
     * flash message
     */

    $(".alert").fadeTo(2000, 500).fadeOut(500, function () {
        $(".alert").alert('close');
    });



    /* *
     * ----------------------------------------
     * Jquery DataTables Initialization
     * ----------------------------------------
     * Ajax
     * Ajax url Dynamic From Table attribute data-url
     */

    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#dataTable').data('url'),
    });


    /* *
     * ----------------------------------------------------
     * Select2 jQuery
     * ----------------------------------------------------
     */

    $('.select2').select2();

    /*
     * DataTables Dynamic Delete Form preventDefault()
     * Delete Table Row By Delete Form
     */


    /* *
     * --------------------------------------
     * BootBox ModalBox Plugins
     * --------------------------------------
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



    /* *
     * -----------------------------------------------------
     * Modal BootStrap
     * -----------------------------------------------------
     */

        var modal;

        if( $('#modal').val() == true ){
            modal = true;
        }else{
            modal = false;
        }

        $('#myModal').modal({
            show: modal
        });


    //$('#output').Jcrop({
    //    onSelect:    showCoords,
    //    bgColor:     'black',
    //    bgOpacity:   .4,
    //    setSelect:   [ 0, 0, 360, 360 ],
    //    aspectRatio: 2 / 2
    //});

});



    /* *
     * --------------------------------------------
     * Image Load File
     * --------------------------------------------
     *
     * */

        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);

            console.log('lop');

            $('#output').Jcrop({
                onSelect:    showCoords,
                bgColor:     'black',
                bgOpacity:   .4,
                setSelect:   [ 0, 0, 360, 360 ],
                aspectRatio: 2 / 2
            });

        };


        function showCoords(c) {
            // variables can be accessed here as
            // c.x, c.y, c.x2, c.y2, c.w, c.h
            $('#x').val(c.x);
            $('#y').val(c.y);
            $('#w').val(c.w);
            $('#h').val(c.h);
        }

        function checkCoords(){

            if( parseInt( $('#w').val() ) ) return true;

            alert('selection not accepted');

            return false;
        }