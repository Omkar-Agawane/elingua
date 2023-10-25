











window.addEventListener("load",()=>{

    const preloader = document.querySelector('.preloader');
    preloader.classList.add('preload-stop');
    document.querySelector('body').style.overflow = 'visible';

}
);

var slider = document.getElementsByClassName('slider');
if (slider.length > 0) {
    for (n = 1; n < slider.length; n++) {

        slider[n].style.display = 'none';
    }

    var n = 0;
    var slide = 0;
    setInterval(function () {
        if (slide == slider.length) {
            slide = 0;
        }

        for (n = 0; n < slider.length; n++) {

            slider[n].style.display = 'none';
        }
        slider[slide].style.display = 'block';
        slide = slide + 1;
    }, 4200);

}





function myFunction(event) {
    var x = event.target;
    if(x.getAttribute("data-modal-type") !== "modal")
    {
      document.querySelector('#dropdownmenu').style.display = "none";
    }
    else{
        let dop = document.querySelector('#dropdownmenu');
        if (dop.style.display == 'block') {
            dop.style.display = 'none';
        }
        else {
            dop.style.display = 'block';

        }
    }
    console.log(x.getAttribute("data-modal-type"));
  }



function  show(x,event){

    let link1 = document.querySelector('#details');
    let link2 = document.querySelector('#material');
    let link3 = document.querySelector('#certificate');
    document.querySelector('#details_anchor').classList.remove("active");
    document.querySelector('#material_anchor').classList.remove("active");
    document.querySelector('#certificate_anchor').classList.remove("active");
    link1.style.display = "none";
    link2.style.display = "none";
    link3.style.display = "none";
    event.target.classList.add("active");
    document.getElementById(x).style.display = "block";



}
function  play(x){
    document.getElementById('iframe').setAttribute("src", x);
}
function open(x){
    window.open(x);
}


/* middle banner*/
var sliderContentM = document.getElementsByClassName('middle-slider-content');
if (sliderContentM.length > 0) {
    for (n = 1; n < sliderContentM.length; n++) {

        sliderContentM[n].style.display = 'none';
    }

    var n = 0;
    var slide = 0;
    setInterval(function () {
        if (slide == sliderContentM.length) {
            slide = 0;
        }

        for (n = 0; n < sliderContentM.length; n++) {

            sliderContentM[n].style.display = 'none';
        }
        sliderContentM[slide].style.display = 'block';
        slide = slide + 1;
    }, 3000);

}
/*middle banner ends*/

/*form functions*/
 const registerUser =  async (e)=>{
    e.preventDefault();
 let formData = new FormData(e.target);
 await fetch("./form/register.php", {
    method:"post",  
    body: formData,
    mode:"same-origin"
 }).then((res)=>{
    return res.json();
 }).then((data)=>{
    if(data.message == "duplicate"){
        alert("user email already exist")
    }
 });
}
/*form functions*/


/*login function*/
const getLogin = async (e)=>{
    e.preventDefault();
    const formData = new FormData(e.target);

   await fetch("./form/signin.php",{
        method: "POST",
        mode: "same-origin",
        body:formData
    }).then((res) =>{
        return res.json();
    } ).then((data)=>{
        if(data == "err"){
            alert("Wrong creds, try again");
        }
        else{
            sessionStorage.setItem("clinetkey1", data.key1);
            sessionStorage.setItem("clinetkey2", data.key2);
            sessionStorage.setItem("clinetkey3", data.key3);
            sessionStorage.setItem("user", data.fname);
            sessionStorage.setItem("username", formData.get('username'));
             location.href= "./user.php";///start here
        }
    })
}

const islogin = async ()=>{
    let key1 = sessionStorage.getItem("clinetkey1");
    let key2 = sessionStorage.getItem("clinetkey2");
    let key3 = sessionStorage.getItem("clinetkey3");
    let val =false;
    await  fetch(`./cms/auth.php?k1=${key1}&k2=${key2}`).then((res)=>{
         console.log(res);
         return res.json();
     }).then((data=>{
         if(key3 == data){
            val = true;   
            document.getElementById("userIcon").innerText = "Hi "+ sessionStorage.getItem("user");

        }
        else{
            return;
        }
     }))
     return val;
 }

 const logOut = ()=>{
    sessionStorage.clear();
    location.reload();
 }

/*login function*/



