var header1 = document.querySelector(".navbar");

window.onscroll = function(){

    var top =  window.scrollY;
    if(top >=110){

        header1.classList.add("active1");
    }else{

        header1.classList.remove("active1");
    }
}

/*var mediaSize1 = window.matchMedia("(max-width:768px)");

 function changingAbout(mediaSize1){
 
    if(mediaSize1.matches){

        document.getElementById("upperabout").innerHTML = "<div class="row"> <div class="col-sm-6"></div> <div class="col-sm-6"></div></div>";
    }

}


changingAbout(mediaSize1);*/