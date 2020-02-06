
<script src="<?= base_url('asset/js/jquery.min.jss');?>"></script>
<script src="<?= base_url('asset/js/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('asset/plugins/bower_components/peity/jquery.peity.min.js');?>"></script>
<script src="<?= base_url('asset/plugins/bower_components/peity/jquery.peity.init.js');?>"></script>    <script src="<?= base_url('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js');?>"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url('asset/plugins/bower_components/sweetalert/sweetalert.min.js');?>"></script>
    <script src="<?= base_url('asset/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js');?>"></script>
    
<script type="text/javascript">
    

    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    $("#checkAll").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
    </script>