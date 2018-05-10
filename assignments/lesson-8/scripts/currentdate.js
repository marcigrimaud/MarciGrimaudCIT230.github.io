function currentDate() {
      var date1= new Date();
        var month=date1.getMonth();
        var dayOfWeek=date1.getDay();
        var year=date1.getFullYear();
        var day=date1.getDate();

        var days=["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        var months=["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        var totaldate = days[dayOfWeek] + ", " + day + " " + months[month] + " " + year;  

        document.getElementById("currentdate").innerHTML= totaldate;

                }
      
