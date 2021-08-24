
<h1>EMPLEADOS</h1>


            <div>
                <table id="tbemp" width="100%" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                        <tr>
                            <th style="width:10%;">ID EMPLEADO</th>
                            <th style="width:10%;">FECHA DE INGRESO</th>
                            <th style="width:10%;">NOMBRE DEL EMPLEADO</th>
                            <th style="width:10%;">SALARIO DEL EMPLEADO</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">

                <a class="btn btn-primary" href="<?php echo site_url('Empleados/viewinsert');?>">Agregar Empleado</a>

            </div>


<script>
    var tbemp = null;

    $(document).ready(function() {

        tbemp = $('#tbemp').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-12't><'col-sm-5'i><'col-sm-5'p>>",
            responsive: true,
            pageLength: 10, 
            language: { 
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": {
                url: "Empleados/consultar", 
            },
            "columns": [{ 
                    "data": "ID"
                },
                {
                    "data": "FECHA_INGRESO"
                },
                {
                    "data": "NOMBRE"
                },
                {
                    "data": "SALARIO"
                }
            ]
        });
    });
</script>
