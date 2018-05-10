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

        <img class="bannerimage" src="images/springfieldbanner-large.jpg"
             sizes="100vw"
             
             srcset="
            images/springfieldbanner-small.jpg 600w,
            images/springfieldbanner-medium.jpg 900w, 
            images/springfieldbanner-large.jpg 3000w"
             
             alt="A Banner image of Greenville"
             >
        
    </figure>
      <section class="events">  
        <h2 id="cityname">Springville</h2>
        <h4 id="citymotto"></h4>
        <section id="citydata">  
        <h3>Get to know our City</h3>

          <p id="founded"></p>
          <p id="poppeople"></p>
          <p id="rainfall"></p>
        <h3>Our Events</h3>
          <p id="eventitem"></p>
        </section>        
      </section>
      
      
    <section id="weathersum">
      <h3>Weather Summary</h3>    
      <section class="cwcontainer">
          <div class="current">
            <p class="weather">Sunny</p>
            <picture>

                <img src="images/springfieldw-large.jpg"

                        sizes="33vw"
                        srcset="
                        images/springfieldw-small.jpg 200w, 
                        images/springfieldw-medium.jpg 500w, 
                        images/springfieldw-large.jpg 1200w"

                 alt="Greenville on a sunny day" width="500" style="vertical-align:middle"
                 >

            </picture>
          </div>   

            <div class="highlow">
            <p><strong>High:</strong> 72&#8457;</p>  
            <p><strong>Low:</strong> 45&#8457;</p>  
          </div>

          <div class="conditions">
            <p><strong>Chance Precipitation:</strong> 0&#37;</p>  
            <p><strong>Max Wind:</strong> 30 mph SW</p> 
            <p><strong>Windchill:</strong> <span id="chill"> </span></p>
          </div>           
        </section>
</section>
      
        
    <section class="forecast">
      <h3 class="tabletitle">10 Day Forecast</h3>
      <table>
	    <thead>
          <tr>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Day 4</th>
            <th>Day 5</th>
            <th>Day 6</th>
            <th>Day 7</th>
            <th>Day 8</th>
            <th>Day 9</th>
            <th>Day 10</th>
          </tr>
		</thead>
        <tbody>  
          <tr>
            <td>71&deg;F</td>
            <td>68&deg;F</td>
            <td>68&deg;F</td>
            <td>66&deg;F</td>
            <td>60&deg;F</td>
            <td>61&deg;F</td>
            <td>61&deg;F</td>
            <td>65&deg;F</td>
            <td>70&deg;F</td>
            <td>75&deg;F</td>
          </tr>
		</tbody>
      </table>
    </section>
      
    <article>
    <div class="artitem1">
          <h3>Springfield and the Simpsons</h3>	
            <p class="town-article">
                In 2014 Simpsons creator Matt Groening finally revealed that the Springfield in Oregon was the Springfield he had in mind when he created his cartoon family, dashing the hopes of more famous Springfields in Massachusetts and Illinois. The Oregon town now provides maps to some of the local sights, such as the statue on which Jebediah Springfield is based and the bar that inspired Moe's Tavern.

                The most colorful photo-op is a 15x30-foot mural downtown, painted with the assistance of Twentieth Century Fox artist Julius Preite. Yeardley Smith (Lisa Simpson) presided over its dedication.
            </p>
        </div>
        <figure>
            <img src="images/springfieldarticle-large.jpg" 
                sizes="50vw"
                srcset="
                images/springfieldarticle-small.jpg 400w, 
                images/springfieldarticle-medium.jpg 800w, 
                images/springfieldarticle-large.jpg 1200w"
                 
                 alt="One of Springfield's famous attractions is the Simpson 15x30-foot mural downtown" width="400"><!--<br> might need for later. Don't like how text lines with bottm of image--></figure>
        
      </article>		  
  
  </main>
    
    <footer>    
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assignments/lesson-10/modules/footer.php'; ?>
    </footer>

    <script src="scripts/hamburger.js"></script>
    
    <script src="scripts/windchills.js"> </script>
        <script>windChill()</script>

    
        <script src="scripts/townscript.js">
        var towns = towndata['towns'];
            populateData(towndata, 'Springfield');
            populateEvents(towndata, 'Springfield');
    </script>

</body>
</html>
