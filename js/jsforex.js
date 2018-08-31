$(document).ready(function() {
     var answered = 0;
     var cNext = 0;
     
   var myQuestion = [];
   myQuestion = ($('form').find(".questions"));
   console.log(myQuestion);
   var count = myQuestion.length;
  let currentSlide = 0;
   console.log(count);
   $('.questions').hide();
  
  

   
    

     





       /**
     * This function show the slide in the screen 
     */
    function showSlide(n) {
       $(myQuestion[currentSlide]).show();

        $('.buttNext').on('click', function() {
          $(myQuestion[currentSlide]).hide();
            $(myQuestion[currentSlide]).next().show();
            currentSlide++;
            if(curent==count){
              endQuiz();
            }
        
       })
    }
       
   /*     slides[currentSlide].classList.remove("active-slide");
        slides[n].classList.add("active-slide");
        currentSlide = n;

        if (currentSlide === 0) {
            previousButton.style.display = "none";
        } else {
            previousButton.style.display = "inline-block";
        }

        if (currentSlide === slides.length - 1) {
            nextButton.style.display = "none";
            submitButton.style.display = "inline-block";
        } else {
            nextButton.style.display = "inline-block";
            //submitButton.style.display = "none";
        }
    } */

//show the next slide
    function showNextSlide() {
        showSlide(currentSlide + 1);
    }
    
//show the previous slide
    function showPreviousSlide() {
        showSlide(currentSlide - 1);
    } 

    var quizContainer = document.getElementById("quiz");
    var resultsContainer = document.getElementById("results");
    var scoreContainer = document.getElementById("score");
    var submitButton = document.getElementById("submit");

    // display quiz right away
   

    var previousButton = document.getElementById("prev");
    var nextButton = document.getElementById("next");

    
    var slides = document.querySelectorAll(".questions");
    console.log(slides);
    

    showSlide(0);
  



 
 previousButton.addEventListener("click", showPreviousSlide);
    nextButton.addEventListener("click", showNextSlide);

  })
       

        
 



  
  
            

  








