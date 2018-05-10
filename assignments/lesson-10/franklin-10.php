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

        <img class="bannerimage" src="images/franklinbanner-large.png"
             sizes="100vw"
             
             srcset="
            images/franklinbanner-small.png 600w,
            images/franklinbanner-medium.png 900w, 
            images/franklinbanner-large.png 3000w"
             
             alt="A Banner image of Franklin City"
             >
        
    </figure>
       <section class="events">  
        <h2 id="cityname"></h2>
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



                <img src="images/franklin-original.jpeg"

                        sizes="33vw"
                        srcset="
                        images/franklin-small.png 200w, 
                        images/franklin-medium.png 500w, 
                        images/franklin-large.png 1200w"

                 alt="Franklin city on a sunny day" width="500" style="vertical-align:middle"
                 >

            </picture>
          </div>   

            <div class="highlow">
            <p><strong>High:</strong> 90&#8457;</p>  
            <p><strong>Low:</strong> 66&#8457;</p>  
          </div>

          <div class="conditions">
            <p><strong>Chance Precipitation:</strong> 0&#37;</p>  
            <p><strong>Max Wind:</strong>5 mph SW</p> 
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
            <td>89&deg;F</td>
            <td>87&deg;F</td>
            <td>78&deg;F</td>
            <td>75&deg;F</td>
            <td>72&deg;F</td>
            <td>72&deg;F</td>
            <td>79&deg;F</td>
            <td>83&deg;F</td>
            <td>85&deg;F</td>
            <td>89&deg;F</td>
          </tr>
		</tbody>
      </table>
    </section>
      
    <article>
    <div class="artitem1">
          <h3>Franklin Breaks Record for Biggest Pumpkin</h3>	
            <p class="town-article">
                Pumpkins – reminiscent of fall, county fairs and some of our favorite holidays. Who doesn’t love those roasted pumpkin seeds or homemade pumpkin pie? And let’s not forget those jack-o-lanterns for Halloween. But how do you grow pumpkins in the garden to ensure a bountiful harvest? The following pages will help with all your pumpkin growing needs. Read on to learn about the care of pumpkin plants.
            </p>
        </div>
        <figure>
            <img src="images/pumpkintime-large.png" 
                sizes="50vw"
                srcset="
                images/pumpkintime-small.png 400w, 
                images/pumpkintime-medium.png 800w, 
                images/pumpkintime-large.png 1200w"
                 
                 alt="It is a pumpkin season in Franklin and here is the pumpkin harvest. Pumpkins are loaded in big wagons piled high" width="400"><!--<br> might need for later. Don't like how text lines with bottm of image--></figure>
        
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
            populateData(towndata, 'Franklin');
            populateEvents(towndata, 'Franklin');
    </script>

</body>
</html>
