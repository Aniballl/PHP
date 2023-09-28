window.addEventListener("load",()=>{
    document.querySelector('.formulario').addEventListener('submit',validarFormulario);
    document.querySelector('.formulario').addEventListener('submit',validarFormulario2);
})
function validarFormulario(e) {
    e.preventDefault();
    let color=document.querySelector('#color');
    let potencia=document.querySelector('#potencia');
    let marca=document.querySelector('#marca');
    if (!color.value){
        color.style.backgroundColor="pink";
        if (!potencia.value){
            potencia.style.backgroundColor="pink";
            if (!marca.value){
                marca.style.backgroundColor="pink";
                return;
            }
        }
    }
    this.submit();
}
function validarFormulario2(e) {
    e.preventDefault();
    let cc=document.querySelector('#cc');
    let tipo=document.querySelector('#tipo');
    let marcaM=document.querySelector('#marcaM');
    if (!cc.value){
        cc.style.backgroundColor="pink";
        if (!tipo.value){
            tipo.style.backgroundColor="pink";
            if (!marcaM.value){
                marcaM.style.backgroundColor="pink";
                return;
            }
        }
    }
    this.submit();
}