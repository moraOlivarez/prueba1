



  <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css
" rel="stylesheet">
<h1>México</h1>

<div>

<table id="example" class="display" style="width:1000px; height: 800px;">
        <thead>
            <tr>
                <th>Nombre Estado</th>
                <th>Nombre Ciudad</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>Nombre Estado</th>
                <th>Nombre Ciudad</th>
            </tr>
        </tfoot>
    </table>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>



 $(document).ready(function() {
            $('#example').DataTable( {
               
                "ajax": {
                    "url": '{{ route("get.estados") }}',
                    "dataSrc": ""
                },
                    columns: [
                            {
                                data: "id_municipio"
                            },
                            {
                                data: "nombre"
                            }
                        
                        ],

            } );
        } );

</script>