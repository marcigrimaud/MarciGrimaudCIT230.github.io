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

        <img class="bannerimage" src="images/greenvillebanner-large.jpeg"
             sizes="100vw"
             
             srcset="
            images/greenvillebanner-small.jpg 600w,
            images/greenvillebanne-medium.jpg 900w, 
            images/greenvillebanner-large.jpeg 3000w"
             
             alt="A Banner image of Greenville City"
             >
        
    </figure>
      <section class="events">  
        <h2 id="cityname">Greenville</h2>
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



                <img src="images/greenville-large.jpg"

                        sizes="33vw"
                        srcset="
                        images/greenville-small.jpg 200w, 
                        images/greenville-medium.jpg 500w, 
                        images/greenville-large.jpg 1200w"

                 alt="Greenville city on a sunny day" width="500" style="vertical-align:middle"
                 >

            </picture>
          </div>   

            <div class="highlow">
            <p><strong>High:</strong> 85&#8457;</p>  
            <p><strong>Low:</strong> 60&#8457;</p>  
          </div>

          <div class="conditions">
            <p><strong>Chance Precipitation:</strong> 10&#37;</p>  
            <p><strong>Max Wind:</strong> 10 mph SW</p> 
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
            <td>84&deg;F</td>
            <td>84&deg;F</td>
            <td>80&deg;F</td>
            <td>75&deg;F</td>
            <td>72&deg;F</td>
            <td>70&deg;F</td>
            <td>75&deg;F</td>
            <td>75&deg;F</td>
            <td>77&deg;F</td>
            <td>85&deg;F</td>
          </tr>
		</tbody>
      </table>
    </section>
      
    <article>
    <div class="artitem1">
          <h3>10 Things to do in Greenville</h3>	
            <p class="town-article">
                Whether you're an outdoor enthusiast, a history buff, a foodie or an art lover, there's no shortage of things to do in Greenville. Many popular attractions are located in the downtown area within walking distance of one another, including the cultural campus of Heritage Green, which is home to the Children's Museum of the Upstate, the Greenville County Museum of Art and the satellite location of the Bob Jones Museum and Gallery. You can also walk to Falls Park on the Reedy to enjoy trails, gardens and gorgeous Reedy River views right in the heart of the city. Several of Greenville's top restaurants are also located in this area, as is the popular Dark Corner Distillery. When you're ready for an outdoor adventure, hop on the nearly 20-mile-long GHS Swamp Rabbit Trail. And while you're exploring, look for the nine bronze mice statues hidden along Main Street.
            </p>
        </div>
        <figure>
            <img src="images/greenvillearticle-large.jpg" 
                sizes="50vw"
                srcset="
                images/greenvillearticle-small.jpg 400w, 
                images/greenvillearticle-medium.jpg 800w, 
                images/greenvillearticle-large.jpg 1200w"
                 
                 alt="This is a picture about things to do in Greenville" width="400"><!--<br> might need for later. Don't like how text lines with bottm of image--></figure>
        
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
            populateData(towndata, 'Greenville');
            populateEvents(towndata, 'Greenville');
    </script>
    

</body>
</html>
