<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <form>
        <div class="mt4">
            <div class="form-group">
                <label for="location">Property location</label>
                <input type="text" class="form-control" aria-describedby="PropertyHelp" value="Nairobi, Kenya" name="location" id="location-address" aria-describedby="locationHelp" data-latitude-input="#location-lat" data-longitude-input="#location-lon" placeholder="The location of the property" required>                           
                <small class="form-text text-muted" id="PropertyHelp">Type the name or click the location on the map.</small> 
            </div>  
            <div class="form-group" >
                <div id="location" style="height: 400px;"></div>
                <input type="hidden" class="form-control" name="latitude" style="width: 110px" id="location-lat" />
                <input type="hidden" class="form-control" name="longitude" style="width: 110px" id="location-lon" />
            </div>                                       
                        
        </div>    
    </form>
<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=true&libraries=places&key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.placepicker.js"></script>
<script >
    $("#location-address").each(function() {
      var target = this;
      var $map = $('#location');

      var placepicker = $(this).placepicker({
        map: $map.get(0),
        placeChanged: function(place) {
          //console.log("place changed: ", place.formatted_address, this.getLocation());
          var latitude = this.getLocation().latitude;
          var longitude = this.getLocation().longitude;
          $('#location-lat').val(latitude);
          $('#location-lon').val(longitude);

        }
      }).data('placepicker');
    });
</script>
</body>
</html>