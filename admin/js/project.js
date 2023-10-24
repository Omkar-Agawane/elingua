


var sliderContent =  document.getElementsByClassName('slider-content');




if(sliderContent.length >0){
      for(n=1;n<sliderContent.length;n++){
             console.log("asd");
               sliderContent[n].style.display = 'none';  
        }
   
     var n=0;
    var slide =0;
    setInterval(function(){
        if(slide== sliderContent.length){
            slide=0;
        }
        
       for(n=0;n<sliderContent.length;n++){
             
               sliderContent[n].style.display = 'none';  
        }
        sliderContent[slide].style.display = 'block';
        slide = slide+1;
        },3000);
    
}
    












