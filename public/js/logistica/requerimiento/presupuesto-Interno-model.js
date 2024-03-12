class PresupuestoInternoModel {

    constructor(token) {
        this.token = token;
    }

 

    obtenerListaDetallePrespuestoInterno(idPresupuestoIterno){

        const mesAfectacion = document.querySelector("select[name='mes_afectacion']") && document.querySelector("select[name='mes_afectacion']").value!=''?document.querySelector("select[name='mes_afectacion']").value:0;
        return new Promise(function(resolve, reject) {
            $.ajax({
                type: 'GET',
                url:`obtener-detalle-presupuesto-interno/${idPresupuestoIterno}/${mesAfectacion}`,
                dataType: 'JSON',
                
                beforeSend: function (data) { 
                    $('select[name="id_presupuesto_interno"]').LoadingOverlay("show", {
                        imageAutoResize: true,
                        progress: true,
                        imageColor: "#3c8dbc"
                    });
                    },
                success(response) {
                    resolve(response);
                    $('select[name="id_presupuesto_interno"]').LoadingOverlay("hide", true);

                },
                error: function(err) {
                    reject(err) 
                }
                });
            });
    }

    comboPresupuestoInterno(idGrupo,idArea){

        return new Promise(function(resolve, reject) {
            $.ajax({
                type: 'GET',
                url:`combo-presupuesto-interno/${idGrupo}/${idArea}`,
                dataType: 'JSON',
                beforeSend: function (data) { 
                    $('select[name="id_presupuesto_interno"]').LoadingOverlay("show", {
                        imageAutoResize: true,
                        progress: true,
                        imageColor: "#3c8dbc"
                    });
                    },
                success(response) {
                    resolve(response);
                    $('select[name="id_presupuesto_interno"]').LoadingOverlay("hide", true);

                },
                error: function(err) {
                    reject(err) 
                }
                });
            });
    }


}
