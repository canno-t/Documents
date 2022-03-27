
window.onload = function(){
    let sub = document.getElementById('sub');
    let data = document.getElementById('user');
    let type = document.getElementById('types');
    let passwd = document.getElementById('setpasswd');
    sub.addEventListener('click', ()=>{
        $.ajax({
            url:"/usersmanagement",
            method:"POST",
            dataType:"json",
            data:{
                login:data.value,
                passwd:passwd.value,
                type:type.value
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
    });
    function deleteuser(id){
        $.ajax({
            url:"/deleteuser",
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
    $(".users").click(function(event){
        deleteuser(event.target.id);
    });
}