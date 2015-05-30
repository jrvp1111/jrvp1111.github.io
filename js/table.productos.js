
/*
 * Editor client script for DB table productos
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.productos.php",
		"table": "#productos",
		"fields": [
			{
				"label": "Codigo",
				"name": "codigo"
			},
			{
				"label": "Nombre",
				"name": "nombre"
			},
			{
				"label": "Cantidad",
				"name": "cantidad"
			},
			{
				"label": "Imagen",
				"name": "imagen"
			}
		]
	} );

	$('#productos').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.productos.php",
		"columns": [
			{
				"data": "codigo"
			},
			{
				"data": "nombre"
			},
			{
				"data": "cantidad"
			},
			{
				"data": "imagen"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

