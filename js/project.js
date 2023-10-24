function checkPage(){
    let url = window.location.href;
    if(url.indexOf(".php")== -1){
        document.querySelector('#homeSlider').style.display = "block";
    }
    
    
    return;
}

checkPage();




    