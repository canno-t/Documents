window.onload = ()=>{
    document.getElementById('newuser').style.display = "none";
    function deletefile(id){
        $.ajax({
            url:"/deletefile",
            method:"POST",
            dataType:"json",
            data:{
                id:id
            },
            success: (response)=>{
                console.log(response);
                //location.href = '/main';
                //response;
            },
            error: (jq, e)=>{
                console.log(jq + " " + e);
            }
        })
    }
    $(".delete").click(function(event){
        deletefile(event.target.id);
    });
    let button = document.getElementById('new');
    button.addEventListener('click', ()=>{
        document.getElementById('newuser').style.display = "block";
    })
}