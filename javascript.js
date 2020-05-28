//window.location.reload(true);

var header1 = document.querySelector(".navbar");






var profole1 = document.getElementById("profile1");
var profole2 = document.getElementById("profile2");
var profole3 = document.getElementById("profile3");
var profole4 = document.getElementById("profile4");
var profole5 = document.getElementById("profile5");
var profole6 = document.getElementById("profile6");
var profole7 = document.getElementById("profile7");

function toggleProfiles(){

   
    if(profole1.style.display ==  "block"){

        profole1.style.display = "none";
    }else{

        profole1.style.display = "block";
    }

    profole2.style.display = "none";
    profole3.style.display = "none";
    profole4.style.display = "none";
    profole5.style.display = "none";
    profole6.style.display = "none";
    profole7.style.display = "none";
    

}

function toggleProfiles2(){

  

    if(profole2.style.display ==  "block"){

        profole2.style.display = "none";
    }else{

        profole2.style.display = "block";
    }
    profole1.style.display = "none";
    profole3.style.display = "none";
    profole4.style.display = "none";
    profole5.style.display = "none";
    profole6.style.display = "none";
    profole7.style.display = "none";
    

}

function toggleProfiles3(){

    

    if(profole3.style.display ==  "block"){

        profole3.style.display = "none";
    }else{

        profole3.style.display = "block";
    }

    profole1.style.display = "none";
    profole2.style.display = "none";
    profole4.style.display = "none";
    profole5.style.display = "none";
    profole6.style.display = "none";
    profole7.style.display = "none";
    

}

function toggleProfiles4(){

   

    if(profole4.style.display ==  "block"){

        profole4.style.display = "none";
    }else{

        profole4.style.display = "block";
    }

    profole1.style.display = "none";
    profole2.style.display = "none";
    profole3.style.display = "none";
    profole5.style.display = "none";
    profole6.style.display = "none";
    profole7.style.display = "none";
    

}

function toggleProfiles5(){

    

    if(profole5.style.display ==  "block"){

        profole5.style.display = "none";
    }else{

        profole5.style.display = "block";
    }
    profole1.style.display = "none";
    profole2.style.display = "none";
    profole3.style.display = "none";
    profole4.style.display = "none";
    profole6.style.display = "none";
    profole7.style.display = "none";

}

function toggleProfiles6(){

    

    if(profole6.style.display ==  "block"){

        profole6.style.display = "none";
    }else{

        profole6.style.display = "block";
    }
    profole1.style.display = "none";
    profole2.style.display = "none";
    profole3.style.display = "none";
    profole4.style.display = "none";
    profole5.style.display = "none";
    profole7.style.display = "none";
    

}

function toggleProfiles7(){

    

    if(profole7.style.display ==  "block"){

        profole7.style.display = "none";
    }else{

        profole7.style.display = "block";
    }

    profole1.style.display = "none";
    profole2.style.display = "none";
    profole3.style.display = "none";
    profole4.style.display = "none";
    profole5.style.display = "none";
    profole6.style.display = "none";
    

}

function scrolled1(){

var timeL = gsap.timeline();
timeL.from("#dedicated",{opacity: 0, x:-300, duration:3});   

//timeL.from("#name2",{opacity : 0, x:300, duration:2},"-=2");

}
