$(document).ready(function() {
     var answered = 0;
     var score = 0;
     var idno = [];
     
   var myQuestion = [];
   myQuestion = ($('form').find(".questions"));
  
   var count = myQuestion.length;

   let currentSlide = 0;
   var abc = ($('div').find(".answerm"));
    
          

  
   
   
/*
      shuffle(myQuestion);
    //ALL FUNCTION
    /*
    function random question
     */

  /*  function shuffle(myQuestion) {
        var m = myQuestion.length,
            t, i;
        // continue reverse
        while (m) {
            // get a element
            i = Math.floor(Math.random() * m--);
            // Then reverse this element
            t = myQuestion[m];
            myQuestion[m] = myQuestion[i];
            myQuestion[i] = t;
        }
        return myQuestion;
    } */


   $('.questions').hide();



    
    
  
  
  $('.buttNext').on('click', function() {
       $(myQuestion[currentSlide]).hide();
        currentSlide++;
        showSlide(currentSlide); 
        var z = abc[currentSlide].innerHTML;
        var inow = $('form').find("> div").attr("data-question-id");
        console.log(inow[currentSlide]);
        



      
   })


   $('input[type="radio"]').click(function() {
         var ids = $(this).val();
          var z = abc[currentSlide].innerHTML;
          if(z === ids){
          score++;
          console.log(score);

        }


        answered++;
        var y = 1;
       

    })



  $('.buttPrev').on('click',function(){
    $(myQuestion[currentSlide]).hide();
     currentSlide--;
     showSlide(currentSlide);
  })

       /**
     * This function show the slide in the screen 
     */
    function showSlide(n) {
     
        $(myQuestion[currentSlide]).show();
        currentSlide = n;

        if (currentSlide === 0) {
            previousButton.style.display = "none";
        } else {
            previousButton.style.display = "inline-block";
        }

        if (currentSlide === count - 1) {
            $('.buttNext').hide();
            submitButton.style.display = "inline-block";
            

        } else {
             $('.buttNext').show();
            nextButton.style.display = "inline-block";
            //submitButton.style.display = "none";
        }  

       
    }
       
      

//show the result
    function End() {
              $('.questions').hide();
              $('#results').append('Bạn đạt' + ' ' + score + ' ' + 'trên tổng số' + ' ' + count + ' ' + 'câu');
                    $(document.createElement('h3')).css({'text-align':'center', 'font-size':'4em'}).text(Math.round(score/quiz.length * 100) + '%').insertAfter('#results');

       
      //  console.log(score)  
            
    }


    

   

   
    var submitButton = document.getElementById("submit");

    // display quiz right away
   

    var previousButton = document.getElementById("prev");
    var nextButton = document.getElementById("next");

    showSlide(0);




     $('.buttSub').on('click',function(){
       if(currentSlide == count - 1){
         if (answered == 0){
           alert("Vui lòng bấm nút trở về để chọn câu trả lời !!!");
         } else {
         End();
       }
       }
       else {
           alert("Bạn đã chọn " + answered + " câu trên " + myQuestion.length + " câu");
       }
   })

     
  



 

  })