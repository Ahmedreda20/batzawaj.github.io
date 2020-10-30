<?php
session_start();
$answer1 = 0;
$answer2 = 0;
$answer3 = 0;
$answer4 = 0;
$answer5 = 0;
$answer6 = 0;
// echo $_POST['ritem1'];
// echo $_POST['ritem2'];
// echo $_POST['ritem3'];
// echo $_POST['ritem4'];
// echo $_POST['ritem5'];
// echo $_POST['ritem6'];
// echo $_POST['ritem7'];
// echo $_POST['ritem8'];
// echo $_POST['ritem9'];
// exit;
function checkAnswer ($aa){
    switch ($aa) {
        case "a1":
            global $answer1;
            $answer1 = $answer1 + 1;
            break;
        case "a2":
            global $answer2;
            $answer2 = $answer2 + 1;
            break;
        case "a3":
            global $answer3;
            $answer3 = $answer3 + 1;    
            break;
        case "a4":
            global $answer4;
            $answer4 = $answer4 + 1;
            break;
        case "a5":
            global $answer5;
            $answer5 = $answer5 + 1;
            break;
        case "a6":
            global $answer6;
            $answer6 = $answer6 + 1;
            break;  
        default:
            echo "You did not choose!";
    }
    // return 0;
}
if(isset($_POST['ritem1'])){
    checkAnswer($_POST['ritem1']);
}
if(isset($_POST['ritem2'])){
    checkAnswer($_POST['ritem2']);
}
if(isset($_POST['ritem3'])){
    checkAnswer($_POST['ritem3']);
}
if(isset($_POST['ritem4'])){
    checkAnswer($_POST['ritem4']);
}
if(isset($_POST['ritem5'])){
    checkAnswer($_POST['ritem5']);
}
if(isset($_POST['ritem6'])){
    checkAnswer($_POST['ritem6']);
}
if(isset($_POST['ritem7'])){
    checkAnswer($_POST['ritem7']);
}
if(isset($_POST['ritem8'])){
    checkAnswer($_POST['ritem8']);
}
if(isset($_POST['ritem9'])){
    checkAnswer($_POST['ritem9']);
}
echo "answer1: ".$answer1."<br>";
echo "answer2: ".$answer2."<br>";
echo "answer3: ".$answer3."<br>";
echo "answer4: ".$answer4."<br>";
echo "answer5: ".$answer5."<br>";
echo "answer6: ".$answer6."<br>";

$result = array($answer1, $answer2, $answer3, $answer4, $answer5, $answer6);
$origianl = $result;
rsort($result);
// var_dump($result);
echo $result[0]." best number <br>";
// getting answer number
$best_answer = array_search($result[0], array_values($origianl));

$_SESSION['answer1']=$answer1;
$_SESSION['answer2']=$answer2;
$_SESSION['answer3']=$answer3;
$_SESSION['answer4']=$answer4;
$_SESSION['answer5']=$answer5;
$_SESSION['answer6']=$answer6;
//variables for a second page 
$flag_second_page=0;
$question10=[];
for($i=0;$i<6;$i++){
    if($result[0]==$origianl[$i]){
        $flag_second_page++;
        echo $i." index number<br>";
        array_push($question10, $i);
    }
}
var_dump($question10);
$_SESSION['q_num']=$question10;
if($flag_second_page<2){
    header("location:result.php");
}else header("location:second.php")

?>