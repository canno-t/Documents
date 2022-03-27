window.onload = ()=>{
    let login = document.getElementById("login");
    let passwd = document.getElementById("passwd");
    document.getElementById('sub').addEventListener('click', ()=>{
        $.ajax({
            url:"/main",
            method:"POST",
            dataType:"text",
            data:{
                "login":login.value,
                "passwd":passwd.value
            },
             //responseType:"text/html",
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
}