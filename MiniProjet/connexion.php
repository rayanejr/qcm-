<?php
$id= mysqli_connect("localhost","root","","qcm");

$difficulte = null;

    if (isset( $_POST['difficulte'] )) {
      $difficulte = $_POST['difficulte'];
    }

    $reqQuestions  = 'SELECT * FROM `questions` WHERE `niveau` = '. $difficulte.' LIMIT 10';
    
    $res=mysqli_query($id,$reqQuestions);
    
    $blocHTML = '';
    
    while ( $data = mysqli_fetch_assoc($res) ) { 
        
        $blocHTML.='
            <h3>'.$data['libelleQ'].'</h3>
        ';
        // we must get the unsw
        $blocHTML.='<ul>';
        
        $reqReponses  = 'SELECT * FROM `reponses` WHERE `idq` = '.$data['idq'];
        $res2 = mysqli_query($id,$reqReponses);
        
        while ( $rep = mysqli_fetch_assoc($res2) ) {
            $blocHTML.='<li>  <input type="radio" name="response_question_'.$data['idq'].'" value="'.$rep['idr'].'" > <lablel>'.$rep['libeller'].'</label> </li>';
        }
        $blocHTML.='</ul>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions QCM</title>

</head>
<body>

<div style="text-align: center;"> 
       <section >
            <h1>Bienvenue dans mon QCM</h1>
       </section>

       <?php echo $blocHTML; ?>

</div>

<div style="text-align: center;">
    <input type="submit" value="Valider" style="width: 15%; margin-top: 50px;border: 10px;padding:10px 40px; background-color: gold; border-radius: 30px;">
</div>
    
</body>
</html>