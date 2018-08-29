$(document).ready(function() {

   var myQuestion = $('form').find(".questions");
   var count = myQuestion.length;
   console.log(count);
   $('.questions').hide();
  

   var inow = $('form').find("> div").first().attr("data-question-id");
   console.log(inow);
   
    $('.questions#question_' + inow ).show();
    $('.buttNext').on('click', function() {
        $('.questions#question_' + inow).hide();
        $('.questions#question_' + inow).next().show();       
        

        inow++;
       /* if(inow==count + 1){
        
        submit();}
*/
       
        
    })
    $('.buttPrev').on('click',function() {
         $('.questions#question_' + inow).hide();
        $('.questions#question_' + inow).prev().show(); 
        $('.questions#question_' + inow).next().hide();    

        inow--;
    })




   /*function check(){
          var ans = $('form').find("> div").first().attr("data-ans");
   console.log(ans);
   }*/


  myQuestion.each(function(i) {
    
    

   


       
     
      /*  hider = i + 2;
       
      
      // console.log(hider);
       if (i == 0) {
           $("#question_" + hider).hide();
           createNextButton(i);
           console.log(hider);

       } else if (count == i + 1) {
           var step = i + 1;
           console.log(count);
          
           console.log(step);
           $("#next" + step).on('click', function() {
               submit();
           });
           $("#prev" + step).on('click', function() {
               var step = i + 1;
               var step1 = step - 1;

               $("#question_" + step).hide();
               $("#question_" + step1).show();

           });

       

       } else {
           $("#question_" + hider).hide();
           createNextButton(i);
           createPrevButton(i);
       } */
   }); 

            

   //ALL FUNCTION

   


   function submit() {
       $.ajax({
           type: "POST",
           url: "ajax.php",
           data: $('form').serialize(),
           success: function(msg) {
               $("#quiz_form").addClass("hide");
               $('#result').show();
               $('#result').append(msg);
           }
       });
   }

   function createNextButton(i) {
      
       $('#next').on('click', function() {
           $("#question_" + step).hide();
           $("#question_" + step1).show();
       });
      
   }

   function createPrevButton(i) {
       var step = i + 1;
       var step1 = step - 1;
       $('#prev' + step).on('click', function() {
           $("#question_" + step).hide();
           $("#question_" + step1).show();
       });

   }
})