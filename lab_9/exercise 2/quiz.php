<?php
  
  function correctAns($qnum, $correctAnswer){
    $question = $_POST["q" . $qnum];
    echo "<p>You answered $question.</p>";   
    if ($question == $correctAnswer){
      echo "<p>This is the correct answer.</p>";
      global $correctAnswers;
      $correctAnswers++;
    }
    else{
      echo "<p>This is the incorrect answer.</p>";
    }
    echo "<br>";
  }

  echo  "Q1: What modern day capital city was once know as Byzantium?";
	echo "<br>";
  correctAns(1, "Istanbul");
	echo "<br>";

  echo "Q2: What is the only bird that can fly backwards?";
	echo "<br>";
  correctAns(2, "Hummingbird");
	echo "<br>";

  echo "Q3: Who is credited with the discovery of Penicillin?";
	echo "<br>";
  correctAns(3, "Alexander Fleming");
	echo "<br>";

  echo "Q4: What kind of person can NOT be on a stamp?";
	echo "<br>";
  correctAns(4, "A Living Person");
	echo "<br>";

  echo "Q5: What is the smallest country in the world?";
	echo "<br>";
  correctAns(5, "Vatican City");
	echo "<br>";

	$percent = ($correctAnswers/5)*100;

	echo "You got $correctAnswers correct!";
	echo "<br>";
	echo "Which is a $percent%!";
  echo "<br>";
  if ($percent < 60){
    echo "Better luck next time!";
  }
  else{
    echo "Great job!!";
  }
?>