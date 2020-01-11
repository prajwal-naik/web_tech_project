function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
	var correct = 0;


	if (question1 == "lapse") {
		correct++;
}

if (question2 == "altimeter") {
    correct++;
}
if (question3 == "dorsal") {
    correct++;
}
if (question4 == "squawk") {
    correct++;
}
if (question5 == "loran") {
    correct++;
}


	//var messages = ["Great job!", "That's just okay", "Better luck next time!"];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct > 0 && correct < 5) {
		score = 1;
	}

	if (correct == 5) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	//document.getElementById("message").innerHTML = messages[score];
    document.getElementById("number_correct").innerHTML += "You got " + correct + " correct.<br><br><br>";
    document.getElementById("number_correct").innerHTML += "The answers correct are:<br> <br>LAPSE<br>ALTIMETER<br>DORSAL<br>SQUAWK<br>LORAN";
	//document.getElementById("picture").src = pictures[score];
	}
	