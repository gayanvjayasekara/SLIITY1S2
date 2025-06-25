<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third party cover</title>
    <link rel="stylesheet"  href = "Thirdpartycover.css?v=1.3"/>
    
</head>
<body>
    <section id="main-container">
    <label><h2 id="heading">Third Party Insurance Cover</h2><br></label>
    <div id="container">
        <div class="box" id="left">
          <p>pat pat 3rd party cover is the only 3rd party insurance that offers benefitsto the insured<br><br>
            The benefits include compenation up to the market value of the vehicle in the event it is condemned due to an accident 
                <ul type="radio">
                   <li>A personal accident cover of Rs.50,000 to insured</li>
                    <li>A hospitalization cover of Rs.100,000 in the event the insured is hospitalized due to a road accident</li>
                    <li>vehicle users are entitled to a hospitalization cover of Rs.200,000 in the event the insured ishospitalized due to a road accident</li>
                </ul>
           </p>
           <button id="buy-online">Buy online</button>
        </div>

        
        <div class="box" id="right">
                    <h3>Request a quotation</h3>
                    <form method="POST" action="Insert.php">

                        <div class="input-container">                        
                        <label>Business name(Required) </lebel><br>
                        <input type="text" name="Bname"><br>
                        </div>

                        <div class="input-container">
                        <label>Your Email(Required) </label> <br>
                        <input type="text" name="Bemail"><br>
                        </div>

                        <div class="input-container">
                        <label>Contact number(Required) </lebel> <br>
                        <input type="text" name="Bcontact"><br>
                        </div>

                        <div class="input-container">
                        <label>specifications (Required)</lebel><div id="number-longs"><div> <br>
                        <input type="text" name="Specification" id="number"><br><br></label>
                        </div>

                        <div class="input-container">
                        <label id="btn-container">
                        <input type="submit" value ="Send">
                        </label> 
                        </div>

                    </form>
        </div>

    </div>

    </section>
   
    <?php include "footer.php" ?>
    


</body>
</html>