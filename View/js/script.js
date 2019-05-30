/*ESTE METODO SIRVE PARA QUE ESTE CARGADO ANTES DE REALIZAR CUALQUIER FUNCION*/
$(document).on('ready',function(){
    
       function moveSlider(e){
        /*DECLARO VARIABLES PARA TENER UBICACIONES EN X*/
        /*EN POS GUARDO EL ESPACIO QUE HAY ENTRE EL FILO DE LA PANTALLA Y DONDE EMPIEZA EL SLIDER(CUADRITO DE BARRA)*/
        /*POSX GUARDO LA POSICION QUE HAY SOLO EN LA BARRA YA QUE LE ESTOY QUITANDO EL PASCIO DE POS OSEA EL DE LA PANTALLA EN GENERAL*/
        //la variable value dice el % de la barra en numeros
        var pos=$(e.currentTarget).offset() ,
            posX= e.pageX-pos.left ,
            value= Math.round((posX*100/$(e.currentTarget).outerWidth())/10);
        
        /*ESTE IF CONTROLA QUE NO SE SALGA DE LOS LIMITES DE EL SLIDER*/
        if(posX >=0 && posX <= $(e.currentTarget).outerWidth()){
            /*AQUI PINTA DONDE UNO LE DE CLICK DENTRO DEL SLIDER*/
            /*PINTA SOLO EL ANCHO SEGUN EL TAMAÑO DE POSX*/
            $('.slider > .progreso').css('width', posX+'px');
            //para que se meuva tambien el indicador
            $('.slider > .indicador').css('left', posX+'px');
            
            //este # hace referencia al id del html
            $('#valueSlider').val(value);
           }
   
}
    
    
     /*Cacturamos el evento mousedown*/
    $('.slider').on('mousedown', function(e){
        
        moveSlider(e);
        
        $(this).on('mousemove', function(e){
            moveSlider(e);
        });
        
        /*ESTO ULTIMO ES PARA QUE HAGA LO MISMO PERO CUANDO LO DEJA ESTRIPADO ELMOUSE*/
    }).on('mouseup', function(){
        $(this).off('mousemove');
    });
});

/*######################################## PARA KILOMETROS ##############################################*/
/*ESTE METODO SIRVE PARA QUE ESTE CARGADO ANTES DE REALIZAR CUALQUIER FUNCION*/
$(document).on('ready',function(){
    
       function moveSlider(e){
        /*DECLARO VARIABLES PARA TENER UBICACIONES EN X*/
        /*EN POS GUARDO EL ESPACIO QUE HAY ENTRE EL FILO DE LA PANTALLA Y DONDE EMPIEZA EL SLIDER(CUADRITO DE BARRA)*/
        /*POSX GUARDO LA POSICION QUE HAY SOLO EN LA BARRA YA QUE LE ESTOY QUITANDO EL PASCIO DE POS OSEA EL DE LA PANTALLA EN GENERAL*/
        //la variable value dice el % de la barra en numeros
        var pos=$(e.currentTarget).offset() ,
            posX= e.pageX-pos.left ,
            value= Math.round((posX*100/$(e.currentTarget).outerWidth())/2);
        
        /*ESTE IF CONTROLA QUE NO SE SALGA DE LOS LIMITES DE EL SLIDER*/
        if(posX >=0 && posX <= $(e.currentTarget).outerWidth()){
            /*AQUI PINTA DONDE UNO LE DE CLICK DENTRO DEL SLIDER*/
            /*PINTA SOLO EL ANCHO SEGUN EL TAMAÑO DE POSX*/
            $('.sliderKilometros > .progresoKilometros').css('width', posX+'px');
            //para que se meuva tambien el indicador
            $('.sliderKilometros > .indicadorKilometros').css('left', posX+'px');
            
            //este # hace referencia al id del html
            $('#valueSliderKilometros').val(value);
           }
   
}
    
    
     /*Cacturamos el evento mousedown*/
    $('.sliderKilometros').on('mousedown', function(e){
        
        moveSlider(e);
        
        $(this).on('mousemove', function(e){
            moveSlider(e);
        });
        
        /*ESTO ULTIMO ES PARA QUE HAGA LO MISMO PERO CUANDO LO DEJA ESTRIPADO ELMOUSE*/
    }).on('mouseup', function(){
        $(this).off('mousemove');
    });
});

