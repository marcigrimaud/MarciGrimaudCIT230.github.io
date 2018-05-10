<!doctype html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/head.php'; ?>   
    </head>
<body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/header.php'; ?>
    </header>
    
      <!-- site navigation use placeholder references -->
        <nav class="topnav">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/nav.php'; ?> 
    </nav>		
  <main>
    
    <figure>

        <img class="bannerimage" src="images/stormcenterbanner-small.png"
             sizes="100vw"
             
             srcset="
            images/stormcenterbanner-small.png 600w,
            images/stormcenterbanner-medium.png 900w, 
            images/stormcenterbanner-large.png 3000w"
             
             alt="A Banner image of a storm"
             >
        
    </figure>
      <h2>Welcome to the Storm Center</h2>
      <h4>Please Report any Storms in your area</h4>
      
  		  
      <form  action="thanks.php" method="post" enctype="multipart/form-data" name="stormcenterform" id="stormcform">
    <fieldset>
        <legend> Personal Information</legend>
            <label><span>Full Name:</span> <input name="fullname" type="text" pattern="[A-Za-z ]{5}" required> 
            </label>
            
            <label><span>Email:</span> <input name="email" type="email" placeholder="example@gmail.com" >
            </label>
        
            <label><span>Phone Number:</span> <input name="phonenumber" type="tel" required>
            </label>
        
            <label><span>Zip Code:</span> <input name="zipcode" type="number"  required>
            </label>

    </fieldset>
    
    <fieldset>
        <legend>Storm Information</legend>
            <label><span>Storm Date:</span> <input name="stormdate" type="date" >
            </label>
        
            <label><span>Storm Type:</span> 
                <input list="storms" name="stormtype">
                  <datalist id="storms">
                    <option value="Flash Flood">
                    <option value="Hail">
                    <option value="Hurricane">
                    <option value="Thunderstorm">
                    <option value="Tornado">
                  </datalist>
            </label>
        
            <label for="rating"><span>Storm Severity (1-10):</span> <input name="stormseverity" type="range" id="rating" value="5" min="1" max="10" step="1" oninput="adjustRating(this.value)" onchange="adjustRating(this.value)">
            <span id="ratingvalue">5</span>
            </label>
        
            <label><span>Storm Region:</span> 
                <select name="stormregions">
                    <option value="Select Region" selected disabled>Select Region</option>
                    <option value="Franklin">Franklin</option>
                    <option value="Greenville">Greenville</option>
                    <option value="Springfield">Springfield</option>
                </select>
            </label>
        
            <label><span>User Danger:</span></label> 
                <label><input type="radio" name="userdanger" value="Yes" checked> Yes</label> 
                <label><input type="radio" name="userdanger" value="No" > No</label> 
                <label><input type="radio" name="userdanger" value="Maybe" > Maybe</label> 
            
        
            <label><span>Additional Storm Information:</span> 
                <textarea name="extrastorminfo" rows="5" cols="50" placeholder="Enter more information about the storm here...." ></textarea>
            </label>
        
    </fieldset>
    <!-- BUTTON-->
    <input type="submit" value="submission" class="subbutton">
        <input name="redirect" type="hidden" value="thanks.php">
    
    
</form>	
      
  </main>
    
    <footer>    
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/footer.php'; ?>
    </footer>

    
    <script src="scripts/hamburger.js"></script>
    
    <script src="scripts/windchills.js"> </script>
        <script>windChill()</script>


    <script src="scripts/currentdate.js"></script>
        <script>currentDate()</script>
    
    <script src="scripts/rating.js"></script>

</body>
</html>
