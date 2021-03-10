document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
    //   dateClick: function(info){

    //       limpiarformulario();            
    //       $('#txtFecha').val(info.dateStr);                
    //       $("#btnAgregar").prop("disabled",false);
    //       $("#btnModificar").prop("disabled",true);
    //       $("#btnEliminar").prop("disabled",true);
    //       $("#exampleModal").modal();                  
    //       // console.log(info);
    //       // calendar.addEvent( {title:"Event x", date:info.dateStr} );
    //   },
      eventClick:function(info){
        //   $("#btnAgregar").prop("disabled",true);
        //   $("#btnModificar").prop("disabled",false);
        //   $("#btnEliminar").prop("disabled",false);

          // console.log(info);
          // console.log(info.event.tittle);
          // console.log(info.event.start);
          // console.log(info.event.end);
          // console.log(info.event.textColor);
          // console.log(info.event.backgroundColor);
          // console.log(info.event.extendedProps.descripcion);

          $('#txtID').val(info.event.id);
          $('#txtTitulo').val(info.event.title);

          mes = (info.event.start.getMonth()+1);
          dia = (info.event.start.getDate());
          anio = (info.event.start.getFullYear());

          mes=(mes<10)?"0"+mes:mes;
          dia=(dia<10)?"0"+dia:dia;
          // hora = (info.event.start.getHours()+":"+info.event.start.getMinutes());
          hora = (info.event.start.getHours());
          minutes = (info.event.start.getMinutes());
          hora=(hora<10)?"0"+hora:hora;
          minutes=(minutes<10)?"0"+minutes:minutes;

          $('#txtFecha').val(anio+"-"+mes+"-"+dia);
          $('#txtHora').val(hora+":"+minutes);
          $('#txtDescripcion').val(info.event.extendedProps.descripcion); 
          $("#exampleModal").modal();
      },
               
      events:url_show
    
    });


    calendar.setOption('locale', 'Es');
    calendar.render();

    // $('#btnAgregar').click(function(){
    //     objEvento = recolectarDatosGUI("POST");
    //     EnviarInformacion('',objEvento);
    // });
    // $('#btnEliminar').click(function(){
    //     objEvento = recolectarDatosGUI("DELETE");
    //     EnviarInformacion('/'+$('#txtID').val(),objEvento);
    // });
    // $('#btnModificar').click(function(){
    //     objEvento = recolectarDatosGUI("PATCH");
    //     EnviarInformacion('/'+$('#txtID').val(),objEvento);
    // });
    
    // function recolectarDatosGUI(method){

    //     nuevoEvento={
    //       id:$('#txtID').val(),
    //       title:$('#txtTitulo').val(),	
    //       descripcion:$('#txtDescripcion').val(),
    //       color:$('#txtColor').val(),
    //       textColor:'#FFFFFF',	
    //       start:$('#txtFecha').val()+" "+$('#txtHora').val(),	
    //       end:$('#txtFecha').val()+" "+$('#txtHora').val(),
    //       '_token':$("meta[name='csrf-token']").attr("content"),
    //       '_method':method

    //     }
    //     return (nuevoEvento);
    // }
    // function EnviarInformacion(accion,objEvento){
    //   $.ajax(
    //     {
    //       type:"POST",
    //       url:url_+accion,
    //       data:objEvento,
    //       success:function(msg){
    //          console.log(msg);
    //          $("#exampleModal").modal('toggle');
    //         calendar.refetchEvents();
    //          },
    //         error:function(){alert("Hay un error");}
    //     }

    //    );          
    // }
    // function limpiarformulario(){
    //   $('#txtID').val("");
    //   $('#txtTitulo').val("");
    //   $('#txtFecha').val("");
    //   $('#txtHora').val("07:00");
    //   $('#txtColor').val("");
    //   $('#txtDescripcion').val(""); 
    // }
  });