<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    


</head>
<body>



    <div >
       <section style="text-align: center;" >
            <h1 >Bienvenue dans mon QCM</h1>
            <p >Selectionnez votre niveau:</p>


            <hr>

                <form action="./connexion.php" method="post">

                    <div style="display:flex;justify-content:center">
                        <div  style="margin-right: 25px;">
                            <label for="">Débutant</label>  <input type="radio" name="difficulte" value="0" checked>
                        </div>
                        <div >
                            <label for="">Confirmé</label>  <input type="radio" name="difficulte" value="1">
                        </div>



                        
                    </div>

                    <div >
                            <input type="submit" value="Commencer" style="width: 15%; margin-top: 50px;border: 10px;padding:10px 40px; background-color: gold; border-radius: 30px;">
                        </div>
                         
                </form>
            


       </section>

        
    </div>
    
</body>
</html>