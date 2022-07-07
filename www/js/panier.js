let idDescription = $("[id^=ma-div-]") 
    console.log(idDescription);



    $('.buttonread').click(function(){
      $(idDescription).fadeToggle();
    }); 
