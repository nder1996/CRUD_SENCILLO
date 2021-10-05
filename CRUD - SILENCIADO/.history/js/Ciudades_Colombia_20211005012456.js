var Ciudad = []

$(document).ready(function(){
    
 

    $('.Ciudad').html("<option class='Principal' selected>Elige Tu ciudad</option>")

   for(var item=1;item<Ciudad.length;item++){
       $(".Principal").after(`<option value='${item}'>${item}</option>`)
      /* $('.Ciudad').html("<option value="1">Elige Tu ciudad</option>") */
    }
    
   

  /*  $('.Ciudad').html(" <option value="1">Two</option>");*/
   
  alert("ola mundo 2")

 



  });