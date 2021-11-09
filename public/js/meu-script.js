$(document).ready(function()
{
    if(!(document.getElementById('modal') == null)){
        var modal = new bootstrap.Modal(document.getElementById('modal'), 
        {
            keyboard: false
        });
    }
    

    
    $(".excluir").click(function()
    {
        modal.show();
        $("#id").val($(this).data("id"));
    });
    
    $("#btnExcluir").click(function()
    {
        excluir();
    });

    navigateGrid();
    navigateSingle();
    
});

function criarAjax()
{
    try
    {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            ajax = new XMLHttpRequest();
        }
        catch (e)
        {
            alert("Esse browser não suporta o uso de Ajax");
        }
    }
    return ajax;

}

function navigateGrid(){
    $(document).on('click', '.paginacao', function(){
        ajax = criarAjax();
        pagina = $(this).html();
        ajax.onreadystatechange=function(){          
            if(ajax.readyState == 4){
               $("#estados").html(ajax.responseText);
            }else{
                $("#estados").html(`<img src="${BASE_URL}/public/images/carregando.gif" width=50>`);
            }     
        };
       ajax.open("GET",`${BASE_URL}/Ajax/getEstados/${pagina}`,true);
       ajax.send("");
    });
}

function navigateSingle(){
    $(document).on('click', '.btn-navigation', function(){
        btn = this;
        direction = $(btn).data('direction');
        paginate = parseInt($("#paginate").val());
        if(direction == 'next'){
            paginate++;
        }else{
            paginate--;
        }
        
        ajax = criarAjax();
        
        ajax.onreadystatechange=function(){          
            if(ajax.readyState == 4){
                response = JSON.parse(ajax.responseText);
                $("#id").val(response[0].id);
                $("#nome").val(response[0].nome);
                $("#sigla").val(response[0].sigla);
                
                modifyClasses(btn, response);
                
                $("#paginate").val(paginate);
                $(".loader").addClass('d-none');
            }else{
                $(".loader").removeClass('d-none');
            }
        };
        ajax.open("GET",`${BASE_URL}/Ajax/getNext/${paginate}/${direction}`,true);
        ajax.send("");
    });
}

function modifyClasses(element, data){
    $(".btn-navigation").each((key, btn) => {
        $(btn).removeClass("disabled");
    });

    if(data[0].is_last){
        $(element).addClass("disabled");
    }

    if(data[0].is_first){
        $(element).addClass("disabled");
    }
}
