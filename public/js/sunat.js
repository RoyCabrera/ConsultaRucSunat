$(document).ready(function(){
    $("#btnbuscar").click(function(){
        var numruc=$('#ruc').val();
        if(numruc!='')
        {
            $.ajax({
                url:"/consultaruc",
                method:'GET',
                data:{ruc:numruc},
                dataType:'json',
                success:function (data) {
                    var resultados=data.entidad['success'];
                    if (resultados==true){
                        var razon=data.entidad['entity']['nombre_o_razon_social'];
                        var direccion=data.entidad['entity']['direccion'];
                        var distrito=data.entidad['entity']['distrito'];
                        var provincia=data.entidad['entity']['provincia'];
                        var departamento=data.entidad['entity']['departamento'];
                        var estado=data.entidad['entity']['estado_del_contribuyente'];
                        var direccioncompleta=data.entidad['entity']['direccion_completa'];

                        $('#txtruc').val(numruc);
                        $('#txtrazon').val(razon);
                        $('#txtestado').val(estado);
                        $('#txtdireccion').val(direccion);
                        $('#txtdistrito').val(distrito);
                        $('#txtprovincia').val(provincia);
                        $('#txtdepartamento').val(departamento);
                        $('#txtdireccioncompleta').val(direccioncompleta);
                    }
                    else{
                        $('#txtruc').val('');
                        $('#txtrazon').val('');
                        $('#txtestado').val('');
                        $('#txtdireccion').val('');
                        $('#txtdistrito').val('');
                        $('#txtprovincia').val('');
                        $('#txtdepartamento').val('');
                        $('#txtdireccioncompleta').val('');
                        $('#mensaje').show();
                        $('#mensaje').delay(2000).fadeToggle(2500);
                    }
                }
            });
        }
        else{
            alert("Ingrese Ruc");
            $('#ruc').focus();
        }
    });
});