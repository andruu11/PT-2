$('#Modal_Editar_Prueba').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
	      var id_documento = button.data('id_documento')
	      var nombre_documento = button.data('nombre_documento')
	      var id_categoria = button.data('id_categoria')
	      var id_tipo_documento = button.data('id_tipo_documento')
	      
	      var modal = $(this)
		  modal.find('.modal-body #id_documento').val(id_documento)
		  modal.find('.modal-body #nombre_documento').val(nombre_documento)
		  modal.find('.modal-body #id_categoria').val(id_categoria)
		  modal.find('.modal-body #id_tipo_documento').val(id_tipo_documento)
		 
		   $('.alert').hide();//Oculto alert
		})