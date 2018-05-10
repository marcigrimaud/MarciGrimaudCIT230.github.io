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

        <img class="bannerimage" src="images/homepage-large.jpg"
             sizes="100vw"
             
             srcset="
            images/homepage-small.jpg 600w,
            images/homepage-medium.jpg 900w, 
            images/homepage-large.jpg 3000w"
             
             alt="A Banner image of Franklin City, Greenville, and Springfield"
             >
        
    </figure>
      <h2>The Cities on our Weather Radar</h2>
          
    <section id="citiesbox">
      <h3 >Cities</h3>   
      <section class="cwcontainer">
          
          <div class=franklincity>
            <h5>Franklin</h5>
            <picture>
                <a href="http://cit230.hugmarcidesign.com/assignments/lesson-10/franklin-10.php">
                <img src="images/franklin-original.jpeg"
                        sizes="15vw"
                        srcset="
                        images/franklin-small.png 50w, 
                        images/franklin-medium.png 250w, 
                        images/franklin-large.png 400w"

                 alt="Franklin city on a sunny day" width="500" style="vertical-align:middle"
                 >
                </a>
            </picture>
              <p>High: 90&#8457;</p>  
            <p>Low: 66&#8457;</p> 
              
          </div>   

            <div class="greenvillecity">
            <h5>Greenville</h5>
            <picture>
                <a href="http://cit230.hugmarcidesign.com/assignments/lesson-10/greenville.php">
                <img src="images/greenville-large.jpg"
                        sizes="15vw"
                        srcset="
                        images/greenville-small.jpg 50w, 
                        images/greenville-medium.jpg 250w, 
                        images/greenville-large.jpg 400w"

                 alt="Greenville on a sunny day" width="500" style="vertical-align:middle"
                 >
                </a>
            </picture>
              <p>High: 85&#8457;</p>  
            <p>Low: 60&#8457;</p>  
          </div>

          <div class="spingfieldcity">
            <h5>Springfield</h5>
            <picture>
                <a href="http://cit230.hugmarcidesign.com/assignments/lesson-10/springfield.php">
                <img src="images/springfieldw-large.jpg"
                        sizes="15vw"
                        srcset="
                        images/springfieldw-small.jpg 50w, 
                        images/springfieldw-medium.jpg 250w, 
                        images/springfieldw-large.jpg 400w"

                 alt="Springfield on a sunny day" width="500" style="vertical-align:middle"
                 >
                </a>
            </picture>
              <p>High: 72&#8457;</p>  
            <p>Low: 45&#8457;</p> 
          </div>           
        </section>
</section>
      
  </main>
    
    <footer>    
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/footer.php'; ?>
    </footer>

    <script src="scripts/hamburger.js"></script>
    
    <script src="scripts/windchills.js"> </script>
        <script>windChill()</script>

    <script src="scripts/currentdate.js"></script>
        <script>currentDate()</script>

</body>
</html>
