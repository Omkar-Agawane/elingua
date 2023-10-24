
                                 
const sidebar = ()=>{
    let sidebar1 =document.querySelector('#sidebar');
    console.log("sd");
    if(sidebar1.style.display == "none" ){
        sidebar1.style.display = "block"
    }
    else{
        sidebar1.style.display = "none"   
    }   
}
 document.querySelector('#close').addEventListener('click', sidebar); 
 document.querySelector('#menu-mob').addEventListener('click', sidebar); 



 
const toggle_submenu = (x,y,event)=>{
    let toggle_content = document.getElementsByClassName(x);
    let toggle_submenu = document.getElementsByClassName('toggle-submenu');
    for(var i = 0; i<toggle_content.length; i++){
        toggle_content[i].style.display = "none";
    }
    for( i = 0; i<toggle_submenu.length; i++){
        toggle_submenu[i].classList.remove('active');
    }
    document.getElementById(y).style.display = "block";
    event.target.classList.add("active");

}