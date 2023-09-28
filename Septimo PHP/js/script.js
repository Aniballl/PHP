window.addEventListener("load",()=>{
    if (document.getElementById("casilla")!=null){
        /*Habilitar el checkbox*/
        let marcada=document.getElementById('casilla');
        marcada.addEventListener("change",()=>{
            let elem=document.getElementById("enviar");
            console.log(elem);
            if (marcada.checked){
                elem.removeAttribute("disabled");
                validarVacio()
            }else{
                elem.setAttribute("disabled","disabled");
            }
        });
    }else{
        validarVacio();
    }
});
/*Vañida que no se envie vacio los cargos*/
function validarVacio(){
    let form=document.querySelectorAll(".formulario");
    Array.from(form).forEach(form=>{
        form.addEventListener('submit',event=>{
            if (!form.checkValidity()){
                event.preventDefault();
                event.stopPropagation();
            }
        })
    });
}