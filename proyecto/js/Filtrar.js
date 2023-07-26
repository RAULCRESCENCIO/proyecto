function cargarpan() {
    var CategoriaSelect = document.getElementById('Categorias');
    var divSelect = document.getElementById('container2');
    var IdCategoria = CategoriaSelect.value;
    
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var pan = JSON.parse(xhr.responseText);
                    divSelect.innerHTML ='';
                    for (var i = 0; i < pan.length; i++) {
                        var contenedorpan = document.createElement('div');
                        contenedorpan.className='card2';
                        contenedorpan.innerHTML= 
                       ` <img src="data:image/*;base64, `+pan[i].imagen +` "><br>
                       <h4>`+ pan[i].P_nombre +`</h4><br> 
                       <h5>Tipo De Harina:`+ pan[i].TP_tipodeHarina +`</h5><br>
                       <h5>Precio: `+ pan[i].precio+ `</h5><br>
                       <p>`+ pan[i].detalles +`</p><br>
                       <button>Comprar</button>
                       `

                       console.log(3);
                       divSelect.appendChild(contenedorpan);
                    }
                } else {
                    console.error('Error: ' + xhr.status);
                }
            }
        };
      
        var URL='/proyecto/?C=controladorCatalogo&M=ConsultaPanes&IdCategoria=';
        xhr.open('GET', URL + IdCategoria,true);
        xhr.send();
    

}
