$(document).ready(function() {
     var answered = 0;
     var score = 0;
     
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
        console.log(z);
        if(z === ids){
          score++;
          console.log(score);
        }


       
       
        
       
        

      
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
       
      

//show the next slide
    function checkQuestion() {


       
      
       
       
      //  console.log(score);


      
       
            
    }
    
//show the previous slide
    function showPreviousSlide() {
        showSlide(currentSlide - 1);
    } 

    var quizContainer =  document.getElementById("quiz");
    var resultsContainer = document.getElementById("results");
    var scoreContainer = document.getElementById("score");
    var submitButton = document.getElementById("submit");

    // display quiz right away
   

    var previousButton = document.getElementById("prev");
    var nextButton = document.getElementById("next");

    showSlide(0);




   $('input[type="radio"]').click(function() {
     var ids = $(this).val();
     console.log(ids);

        


    }) 
    
     $('.buttSub').on('click',function(){
    
         if (answered < myQuestion.length) {
            alert("Bạn đã chọn " + answered + " câu trên " + myQuestion.length + " câu");
        } 
        if(currentSlide == count - 1){showResults();}
    })

     
  



 

  })
       

        
 



  
  
            

  








