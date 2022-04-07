<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
  </head>
  <body>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ESP-Laravel</title>
  </head>
  <body>

    <section class="vh-100" style="background-color: #4B515D;">
        <div class="container py-5 h-100">
      
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4">
      
              <div class="card" style="color: #4B515D; border-radius: 35px;">
                <div class="card-body p-4">
      
                  <div class="d-flex">
                    <h6 class="flex-grow-1" style="font-weight: bold">Temperature</h6>
                    <h6 id="date-time">00:00</h6>
                  </div>
      
                  <div class="d-flex flex-column text-center mt-5 mb-4">
                    <h6 id="temp" class="display-4 mb-0 font-weight-bold" style="color: #1C2331; font-weight:bold"> 0°C </h6><br>
                    <span class="small" style="color: #868B94" id="txt1"></span>
                  </div>
      
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1" style="font-size: 1rem;">
                      <div><i class="fa-solid fa-calendar-days" style="color: #868B94;"></i> <span class="ms-1" id="date1"></span></div>
                      <div><i class="fa-solid fa-droplet" style="color: #868B94;"></i> <span class="ms-1" id="hum1"> 0% </span></div>
                      <div><i class="fa-brands fa-youtube" style="color: #868B94;"></i> <span class="ms-1">Serbades </span></div>
                    </div>
                    <div id="img1">

                    </div>
                  </div>
      
                </div>
              </div>
      
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
      
                <div class="card" style="color: #4B515D; border-radius: 35px;">
                  <div class="card-body p-4">
        
                    <div class="d-flex">
                      <h6 class="flex-grow-1" style="font-weight: bold">Humidity</h6>
                      <h6 id="date-time1">00:00</h6>
                    </div>
        
                    <div class="d-flex flex-column text-center mt-5 mb-4">
                      <h6 id="hum" class="display-4 mb-0 font-weight-bold" style="color: #1C2331; font-weight:bold"> 0%</h6><br>
                      <span class="small" style="color: #868B94" id="txt2"></span>
                    </div>
        
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1" style="font-size: 1rem;">
                        <div><i class="fa-solid fa-calendar-days" style="color: #868B94;"></i> <span class="ms-1" id="date2"></span></div>
                        <div><i class="fa-solid fa-temperature-quarter" style="color: #868B94;"></i> <span class="ms-1" id="temp1">0°C</span></div>
                        <div><i class="fa-brands fa-youtube" style="color: #868B94;"></i> <span class="ms-1">Serbades </span></div>
                      </div>
                      <div id="img2">

                      </div>
                    </div>
        
                  </div>
                </div>
        
              </div>
          </div>
      
        </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

    var pusher = new Pusher('d19e3e0c6348f700d4c4', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('message');
    channel.bind('my-event', function(data) {

        var temp = document.getElementById('temp');
        var last_temp = parseInt(temp.textContent);
        temp.innerHTML = data.temperature + " °C";

        var hum = document.getElementById('hum');
        var last_hum = parseInt(hum.textContent);
        hum.innerHTML = data.humidity + " %";

        var hum1 = document.getElementById('hum1');
        var last_hum1 = parseInt(hum1.textContent);
        hum1.innerHTML = data.humidity + " %";

        var temp1 = document.getElementById('temp1');
        var last_temp1 = parseInt(temp1.textContent);
        temp1.innerHTML = data.temperature + " °C";

        var temperature = data.temperature;
        var humidity = data.humidity;

        if (temperature <= 29) {
          var temp2 = document.getElementById('img1');
          temp2.innerHTML = "<img src=\"assets/img/snowflake.png\" width=\"100px\">";

          var hum2 = document.getElementById('img2');
          hum2.innerHTML = "<img src=\"assets/img/snowflake.png\" width=\"100px\">";

          var text1 = document.getElementById('txt1');
          text1.innerHTML = "Cuaca Normal !!";

          var text2 = document.getElementById('txt2');
          text2.innerHTML = "Cuaca Normal !!";

        } else {
          var temp2 = document.getElementById('img1');
          temp2.innerHTML = "<img src=\"assets/img/sun.png\" width=\"100px\">";

          var hum2 = document.getElementById('img2');
          hum2.innerHTML = "<img src=\"assets/img/sun.png\" width=\"100px\">";

          var text1 = document.getElementById('txt1');
          text1.innerHTML = "Panass Uy !!";

          var text2 = document.getElementById('txt2');
          text2.innerHTML = "Panass Uy !!";

        }

        

    });

    // Function to format 1 in 01
			const zeroFill = n => {
				return ('0' + n).slice(-2);
			}

			// Creates interval
			const interval = setInterval(() => {
				// Get current time
				const now = new Date();

				// Format date as in mm/dd/aaaa hh:ii:ss
				const time = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

        const date = zeroFill((now.getMonth() + 1)) + '/' + zeroFill(now.getUTCDate()) + '/' + now.getFullYear();

				// Display the date and time on the screen using div#date-time
				document.getElementById('date-time').innerHTML = time;
        document.getElementById('date-time1').innerHTML = time;
        document.getElementById('date1').innerHTML = date;
        document.getElementById('date2').innerHTML = date;
			}, 1000);
  </script>
  </body>
</html>