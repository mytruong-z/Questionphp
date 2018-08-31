$(document).ready(function() {
     var answered = 0;
     var score = 0;
     
   var myQuestion = [];
   myQuestion = ($('form').find(".questions"));
   console.log(myQuestion);
   var count = myQuestion.length;
   let currentSlide = 0;
   console.log(count);

      shuffle(myQuestion);

    //ALL FUNCTION

    /*
    function random question
     */

    function shuffle(myQuestion) {
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
    }


   $('.questions').hide();
  
  $('.buttNext').on('click', function() {
       $(myQuestion[currentSlide]).hide();
        currentSlide++;
        console.log(currentSlide);
        showSlide(currentSlide);   

      
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
       
       function showResults() {
        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll(".align");
        console.log(answerContainers);

        // keep track of user's answers
        let numCorrect = 0;
        var questionNumber = 


        // for each question...
        myQuestion.forEach((currentSlide, questionNumber) => {
            // find selected answer
            var answerContainer = answerContainers[questionNumber];
            var selector = `input[id=${questionNumber}]:checked`;
            var userAnswer = (answerContainer.querySelector(selector) || {}).value;
            // if answer is correct
            if (userAnswer === currentSlide.answer) {
                // add to the number of correct answers
                numCorrect++;
                console.log(numCorrect);

                // color the answers green
                answerContainers[questionNumber].style.color = "lightgreen";
            } else {
                // if answer is wrong or blank
                // color the answers red

                answerContainers[questionNumber].style.color = "red";
            }
        });
        // show number of correct answers out of total
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestion.length} <br>`;
        
    }

//show the next slide
    function checkQuestion() {


      
       
            
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
        answered++;


    }) 
    
     $('.buttSub').on('click',function(){
         if (answered < myQuestion.length) {
            alert("Bạn đã chọn " + answered + " câu trên " + myQuestion.length + " câu");
        } 
        if(currentSlide == count - 1){showResults();}
    })
  



 

  })
       

        
 



  
  
            

  








