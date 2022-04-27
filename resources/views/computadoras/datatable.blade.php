<link rel="stylesheet" href="{{ asset('assets/datatables/jquery.dataTables.min.css') }}">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=4a997f568ed81e6a775847062b076fa6"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fzero_configuration.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('assets/datatables/jquery-3.5.1.js') }}"></script>

<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<!-- EJEMPLO DE DATATABLE -->
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>Marca</td>
            <th>Modelo</td>
            <th>Descripcion</td>
            <th>Precio de Compra</td>    
            <th>Precio de Venta</td>
            <th>Stock</td>
            <th>Ganancias</td>
            <th>Acciones</td>
            </tr>
        </thead>
        <tbody>

        @forelse($computadoras as $computadoras )
                <td>{{ $computadoras->marca}}</td>
                <td>{{ $computadoras->modelo}}</td>
                <td>{{ $computadoras->descripcion}}</td>
                <td>{{ $computadoras->precioDeCompra}}</td>
                <td>{{ $computadoras->precioDeVenta}}</td>
                <td>{{ $computadoras->stock}}</td>
               
                <td><!-- FORMULA DE RESTA--></td>
                <td>{{ $computadoras->precioDeVenta - $computadoras->precioDeCompra}} M.N. </td>
            </tr>

        @empty
            <h3>NO HAY DATOS EN LA BASE DE DATOS </h3>
        @endforelse         
            </tr>
        </tfoot>
    </table>