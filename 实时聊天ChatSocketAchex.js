$.fn.extend({ChatSocket: function(opciones) {
					var ChatSocket=this;
				
                    var idChat=$(ChatSocket).attr('id');
					defaults = {
		                  ws,
                          Room:"RoomDeveloteca",
                          pass:"1234",
                          lblTitulChat:" Chat Develoteca.com ",
                          lblCampoEntrada:"Menssage",
                          lblEnviar:"Send",
                          textoAyuda:"Develoteca",
                          Nombre:"Anónimo",
                          
                          urlImg:"http://placehold.it/50/55C1E7/fff&text=U",
                          btnEntrar:"btnEntrar",
                          btnEnviar:"btnEnviar",
                          lblBtnEnviar:"Enviar",
                          lblTxtEntrar:"txtEntrar",
                          lblTxtEnviar:"txtMensaje",
                          lblBtnEntrar:"Enter",
                          idDialogo:"DialogoEntrada",
                          classChat:"",
                          idOnline:"ListaOnline",
                          lblUsuariosOnline:"Users joined",
                        lblEntradaNombre:"Name:",
                        panelColor:"success"
        			}
					
                     var opciones = $.extend({}, defaults, opciones);
		
                     var ws;
                     var Room=opciones.Room;
                     var pass=opciones.pass;
                     var lblTitulChat=opciones.lblTitulChat;
                     var lblCampoEntrada=opciones.lblCampoEntrada;
                     var lblEnviar=opciones.lblBtnEnviar;
                     var textoAyuda=opciones.textoAyuda;
                     var Nombre=opciones.Nombre;
                     
                     var urlImg=opciones.urlImg;
                     var btnEntrar=opciones.btnEntrar;
                     var btnEnviar=opciones.btnEnviar;
                     var lblBtnEnviar=opciones.lblBtnEnviar;
                     var lblTxtEntrar=opciones.lblTxtEntrar;
                     var lblTxtEnviar=opciones.lblTxtEnviar;
                     var lblBtnEntrar=opciones.lblBtnEntrar;
                     var idDialogo=opciones.idDialogo;
                     var classChat=opciones.classChat;
                     var idOnline=opciones.idOnline;
                     var lblUsuariosOnline=opciones.lblUsuariosOnline;
                     var lblEntradaNombre=opciones.lblEntradaNombre;
                     var panelColor=opciones.panelColor;
                    if( $('#'+idOnline).length==0 )
                    {
                     idOnline=idChat+"listaOnline";
                        $('#'+idChat).append('<br/><div id="'+idOnline+'"></div>');
                        
                    }
    
     function IniciarConexion(){
                    conex='{"setID":"'+Room+'","passwd":"'+pass+'"}';
                    ws= new WebSocket("ws://achex.ca:4010");
                    ws.onopen= function(){ ws.send(conex); }
                    ws.onmessage= function(Mensajes){
                    var MensajesObtenidos=Mensajes.data;
                    var obj = jQuery.parseJSON(MensajesObtenidos);
                    AgregarItem(obj);
                    
                    if(obj.sID!=null){
                        
                                                      
                    if( $('#'+obj.sID).length==0 )
                    {
                        
                      $('#listaOnline').append('<li class="list-group-item" id="'+obj.sID+'"><span class="label label-success">&#9679;</span> - '+obj.Nombre+'</li>');
                        
                    }
                     
                    }
                    
                }
                ws.onclose= function(){
                    alert("Conexión cerrada");
                }
          }
           IniciarConexion();
          function iniciarChat(){
            Nombre=$('#'+lblTxtEntrar).val();
            $('#'+idDialogo).hide();
              $('#'+idOnline).show();
              
            CrearChat();  
            UsuarioOnline();
            getOnline();
          }
           
         
         
    
           
         CrearEntrada();
    // Fin
    
	}
});
