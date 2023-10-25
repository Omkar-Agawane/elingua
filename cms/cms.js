addEventListener('click', (e)=>{
    if(e.target.id == 'signOut'){
        sessionStorage.clear();
        alert("Signed Out");
        location.href="./index.php";
    }else if(e.target.getAttribute('data-btn-type') == "back"){
        window.history.go(-1);

    }

})



const islogin = async ()=>{
    let key1 = sessionStorage.getItem("key1");
    let key2 = sessionStorage.getItem("key2");
    let key3 = sessionStorage.getItem("key3");
    let val = false;
     await fetch(`./auth.php?k1=${key1}&k2=${key2}`).then((res)=>{
         return res.json();
     }).then((data=>{
         if(key3 == data){
            val = true;
        }
     }));
     return val;
 }

 
