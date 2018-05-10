
<!doctype html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-9/modules/head.php'; ?>   
    </head>
<body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-9/modules/header.php'; ?>
    </header>
    
      <!-- site navigation use placeholder references -->
        <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-9/modules/nav.php'; ?> 
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
      <h4>Your Submission is Complete</h4>
      
      <form action="thanks.php" method="post" enctype="multipart/form-data" name="stormcenterform" id="stormcform">
          
       <fieldset>
        <legend> All Done</legend>
           <label><span>Thank you for taking the time to Submit your storm's Information.</span></label>

        </fieldset>	  
    </form>
  </main>
    
    <footer>    
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-9/modules/footer.php'; ?>
    </footer>

    <script src="scripts/hamburger.js"></script>
    
    <script src="scripts/windchills.js"> </script>
        <script>windChill()</script>

    <script src="scripts/currentdate.js"></script>
        <script>currentDate()</script>

</body>
</html>
