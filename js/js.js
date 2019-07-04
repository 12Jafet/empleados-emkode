$(document).ready(function() {
    loadTable();

    $('#formSearch').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
          e.preventDefault();
          return false;
        }
      });

    $(document).on("click", ".editar", function() {
        array = [] 
        $('.'+this.id).each(function() {
            array.push($(this).html());   
        });
        $("#id").val(this.id);
        $("#name").val(array[0]);
        $("#last_name").val(array[1]);
        $("#email").val(array[2]);
        $("#phone").val(array[3]);
    });

    
    $(document).on("click", ".eliminar", function() {
        $.ajax({
            type: "POST",
            async: true,
            url: "php/delete.php",
            data: {id:this.id},
            dataType: "json",
            success: function(response){
                loadTable();
            }
        });
    });
    $(document).on("click", "#modalInsert", function() {
        $("#name").val("");
        $("#last_name").val("");
        $("#email").val("");
        $("#phone").val("");

        $("#save").removeClass("insert").removeClass("update");
        $("#save").addClass("insert");
    });
   
    $(document).on("click", ".modalUpdate", function() {
        $("#save").removeClass("insert").removeClass("update");
        $("#save").addClass("update");
    });

    $(document).on("click", ".insert", function() {
        $.ajax({
			type: "POST",
			async: true,
			url: "php/insert.php",
			data: $("#formEmpleados").serialize(),
			dataType: "json",
			success: function(response){
                loadTable();
			},
			error: function(error){
				alert(error);
			}
		});
    });
    
    $(document).on("click", ".update", function() {
        $.ajax({
			type: "POST",
			async: true,
			url: "php/update.php",
			data: $("#formEmpleados").serialize(),
			dataType: "json",
			success: function(response){
                loadTable();
			},
			error: function(error){
				alert(error);
			}
		});
    });

    $(document).on("click", "#search", function() {
        $.ajax({
			type: "POST",
			async: true,
			url: "php/selectFilter.php",
			data: $("#formSearch").serialize(),
			dataType: "json",
			success: function(response){
                $("#tabla").empty().append("<thead><tr><th scope='col'>#</th><th scope='col'>Nombre</th><th scope='col'>Apellido</th><th scope='col'>Correo electrónico</th><th scope='col'>Teléfono</th><th scope='col'>Acción</th></tr></thead>");
                for(var i=0;i<response.length;i++){
                    var id = response[i]['id']
                    $("#tabla").append("<tbody><tr><td>" + id + "</td><td class='"+id+"'>" + response[i]['name'] + "</td><td class='"+id+"'>" + response[i]['last_name'] + "</td><td class='"+id+"'>" + response[i]['email'] + "</td><td class='"+id+"'>" + response[i]['phone'] + "</td><td>" + '<a href="" class="editar modalUpdate" id="'+id+'" data-toggle="modal" data-target="#exampleModal">Editar</a> <a href="" class="eliminar" data-toggle="modal" id="'+id+'">Eliminar</a>' + "</td></tr></tbody>"  );
                }
			},
			error: function(error){
                $("#tabla").empty().append("<thead><tr><th scope='col'>#</th><th scope='col'>Nombre</th><th scope='col'>Apellido</th><th scope='col'>Correo electrónico</th><th scope='col'>Teléfono</th><th scope='col'>Acción</th></tr></thead>");
				alert("No se encontraron registros");
			}
		});
    });
   

    function loadTable(){
        $.ajax({
            type: "POST",
            async: true,
            url: "php/select.php",
            dataType: "json",
            success: function(response){
                $("#tabla").empty().append("<thead><tr><th scope='col'>#</th><th scope='col'>Nombre</th><th scope='col'>Apellido</th><th scope='col'>Correo electrónico</th><th scope='col'>Teléfono</th><th scope='col'>Acción</th></tr></thead>");
                for(var i=0;i<response.length;i++){
                    var id = response[i]['id']
                    $("#tabla").append("<tbody><tr><td>" + id + "</td><td class='"+id+"'>" + response[i]['name'] + "</td><td class='"+id+"'>" + response[i]['last_name'] + "</td><td class='"+id+"'>" + response[i]['email'] + "</td><td class='"+id+"'>" + response[i]['phone'] + "</td><td>" + '<a href="" class="editar modalUpdate" id="'+id+'" data-toggle="modal" data-target="#exampleModal">Editar</a> <a href="" class="eliminar" data-toggle="modal" id="'+id+'">Eliminar</a>' + "</td></tr></tbody>"  );
                }
            }
        });
    }


});