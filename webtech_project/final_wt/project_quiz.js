    const start=document.getElementById("start");
    const quiz=document.getElementById("quiz");
    const question=document.getElementById("question");
    const choiceA=document.getElementById("A");
    const choiceB=document.getElementById("B");
    const choiceC=document.getElementById("C");
    const choiceD=document.getElementById("D");
    const progress=document.getElementById("progress");
    const scoreContainer=document.getElementById("scoreContainer");

    let myans=[];
    let questions=[
    {
        question:"The Wright Flyer was the first successful heavier-than-air powered aircraft. The Wright brothers flew it four times on December 17, 1903 at Kitty Hawk, North Carolina. What was the nickname the brothers gave to the Flyer's runway?",
        choiceA:"Wright Flyway",
        choiceB:"Kitty Hawk Parallel",
        choiceC:"Junction Railroad",
        choiceD:"Flyer Harbor",
        correct:"choice C",
        correct_answer:"Junction Railroad"
    },
    {
        question:"In May 1978, Air Mshl D Subia PVSM VrC, AOC-in-C, MC gave the Base Repair Depots(BRD) a uniform UNIT CREST and MOTTO. The unit crest depicts a creature with a gear wheel encircling its head. Mythologically,this creature is said to symbolize the spark of life. What is the creature on the BRD crest? ",
        choiceA:"Garuda",
        choiceB:"Phoenix",
        choiceC:"Pegasus",
        choiceD:"Hanuman",
        correct:"choice B",
        correct_answer:"Phoenix"
    },
    {
        question:"What kind of airplane attacked King Kong at the top of the Empire State building in the 1933 movie King Kong?",
        choiceA:"Curtiss P-1 Hawk",
        choiceB:"McHandley Page",
        choiceC:"Junkers G.23",
        choiceD:"Curtiss F8C Helldiver",
        correct:"choice D",
        correct_answer:"Curtiss F8C Helldiver"
    },
    {
        question:" X is the name of the United States Army Air Forces B-29 bomber that dropped a Fat Man nuclear weapon over the Japanese city of Nagasaki during World War II in the second  and last  nuclear attack in history.The name chosen for the aircraft, was a pun on the name of the aircraft commander who flew the plane. What is X",
        choiceA:"Bockscar",
        choiceB:"Lockheed Vega",
        choiceC:"Bantam Bomber",
        choiceD:"Fairey Swordfish",
        correct:"choice A",
        correct_answer:"Bockscar"
    },
    {
        question:"Airbus studies started in this project 1988 to challenge the dominance of the Boeing 747 in the long haul market.The aircraft has a seating capacity of 525, though it is certified for up to 853 passengers.It was first delivered to Singapore Airlines on 15 October 2007 and entered service on 25 October. Which aircraft is being described above?",
        choiceA:"Airbus A320 Family",
        choiceB:"Airbus A350 XWB",
        choiceC:"Airbus A380",
        choiceD:"Airbus A321",
        correct:"choice C",
        correct_answer:"Airbus A380"
    }
    ]


    let lastQuestion=questions.length-1;
    let currentQuestion=0;
    let score=0;

    //show question
    function showQuestion(){
        
        let q=questions[currentQuestion];
        question.innerHTML="<p>"+q.question+"</p>";
        
        choiceA.innerHTML="<p>"+q.choiceA+"</p>";
        choiceB.innerHTML="<p>"+q.choiceB+"</p>";
        choiceC.innerHTML="<p>"+q.choiceC+"</p>";
        choiceD.innerHTML="<p>"+q.choiceD+"</p>";
    
    }
    //click on this to start quiz
    start.addEventListener("click",startfn);

    //function to start quiz
    function startfn()
    {   
        start.style.display="none";
        showQuestion();
        quiz.style.display="block";
        showProgress();
    }

    //show the progress
    function showProgress(){
        for(let index=0;index<=lastQuestion;index++)
        {
            progress.innerHTML+="<div class='prog' id="+index+"></div>";
        
        }
    }


    //check the answer
    function checkAnswer(answer)
    {   
        //myans.push(answer);
        if(answer==questions[currentQuestion].correct)
        {
            score++;
            myans.push(questions[currentQuestion].correct_answer)
            isCorrect();
        }
        else
        {
            myans.push(questions[currentQuestion].correct_answer)   
            isWrong();
        }
        if(currentQuestion<lastQuestion)
        {
            currentQuestion++;
            showQuestion();
        }
        else
        {
            setTimeout(wait,500);
            setTimeout(showScore,1500);
        }
    }

    //correct answer
    function isCorrect()
    {
        document.getElementById(currentQuestion).style.backgroundColor="green";
        //result.innerHTML="<p>correct</p>";
    }

    //incorrect answer
    function isWrong()
    {
        document.getElementById(currentQuestion).style.backgroundColor="#b30000";
        //result.innerHTML="<p>wrong</p>";
    }

    function wait()
    {
        document.getElementById("quiz").style.display="none";
        document.getElementById("loader").style.display = "block";
    }

    function showScore()
    {   
        document.getElementById("loader").style.display = "none";
        scoreContainer.style.display="block";
        quiz.style.display="none";
        scoreContainer.innerHTML+="<p><b>You got "+score+" /5 correct!</b><br><br></p>";
        
        for(let index=0;index<=lastQuestion;index++)
        {   
            let q=questions[index];
            scoreContainer.innerHTML+="<p><b>Q:</b>"+q.question+"</p>";
        
           // scoreContainer.innerHTML+="<p><b>Your answer:</b>"+myans[index]+"</p>";
            scoreContainer.innerHTML+="<p><b>Correct answer: </b>"+q.correct_answer+"<br><br></p>";
        }
    }


