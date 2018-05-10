//JSON FILE
        var requestURL = "https://byui-cit230.github.io/towndata.json";
        var eventSection = document.querySelector('.events')
        
        var request = new XMLHttpRequest();
        request.open('GET', requestURL);
        request.responseType = 'json';
        request.send();
        
        request.onload = function() {
            
            console.log(request)
            
          var towndata = request.response; // store the JSON data
          var towns = towndata['towns'];
            populateData(towndata, 'Franklin');
            populateEvents(towndata, 'Franklin');}
            
         function populateData(jsonObj, cityname){                
            var towns = jsonObj['towns'];
             
             for (var i = 0; i < towns.length; i++) {
                    if(towns[i].name == cityname){
                         document.getElementById("cityname").innerHTML = towns[i].name;
                        document.getElementById("citymotto").innerHTML = towns[i].motto;
                        document.getElementById("founded").innerHTML = "Founded: " + towns[i].yearFounded;
                        document.getElementById("poppeople").innerHTML = "Population: " + towns[i].currentPopulation.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        
                        document.getElementById("rainfall").innerHTML = "Average Rainfall: " +  towns[i].averageRainfall + ' inches';      
                        
                    }
             }
         }
        
        
        function populateEvents(jsonObj, cityname){
            var towns = jsonObj['towns'];
            
            
                for(var i = 0; i < towns.length; i++){
                    if(towns[i].name == cityname){
                    var events= towns[i].events;
                    
                
                var myList = document.createElement('ul');
                
                for (var j = 0; j < events.length; j++){
                    var myItem = document.createElement('li');
                    var eventData = events[j].split(":");
                    
                    var mySpan = document.createElement('span');
                    mySpan.setAttribute("class", "eventdate");
                    mySpan.textContent = eventData[0] + ": ";
                    myItem.appendChild(mySpan);
                    
                    var mySpan = document.createElement('span');
                    mySpan.setAttribute("class", "eventitem");
                     mySpan.textContent = eventData[1] + ": ";
                    myItem.appendChild(mySpan);
                    
                    myList.appendChild(myItem);
                        }
                eventSection.appendChild(myList);
                    }
                }
        }   