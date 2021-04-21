;(function ( $ ) {

  $.fn.extend({
    vc3dEye: function(params) {
      if (params && typeof(params) == 'object') {
        params = $.extend( {}, $.vc3dEye.defaults, params );
      }
      this.each(function(){
        new $.vc3dEye(this, params);
      });
      return;
    }
  });

  $.vc3dEye = function(selectorName, params) {
    //assigning params
    $divID = $(selectorName);
    $imgCarpeta = params.imagePath;
    $imgTotal = params.totalImages;
    $imgExtension = params.imageExtension || "png";
    $modelo = params.modeloCar;
    isMoving = false;
    currentX = 0;
    currentImage=1;
    
    function assignOperations(id) {
          id.mousedown(function(target) {
              isMoving = true;
              currentX=target.pageX - this.offsetLeft;
              //console.log("mousedown : isMoving="+isMoving);
          });

          $(document).mouseup(function() {
              isMoving = false;
              //console.log("mouseup : isMoving="+isMoving);
          });

          id.mousemove(function(target) {
              //console.log("mousemove : isMoving="+isMoving);
              if (isMoving == true) 
                loadAppropriateImage(target.pageX - this.offsetLeft);
              // else 
              // 	currentX = target.pageX - this.offsetLeft
          });

          id.bind("touchstart", function(target) {
              console.log("touchstart : isMoving="+isMoving);
             isMoving = true;

              //store the start position
              var actualTouch = target.originalEvent.touches[0] || target.originalEvent.changedTouches[0];
              currentX = actualTouch.clientX;

          });

          $(document).bind("touchend", function() {
              console.log("touchend : isMoving="+isMoving);
              isMoving = false;
          });

          id.bind("touchmove", function(target) {
              console.log("touchmove : isMoving="+isMoving);
              target.preventDefault();
              var actualTouch = target.originalEvent.touches[0] || target.originalEvent.changedTouches[0];
              if (isMoving == true) 
                loadAppropriateImage(actualTouch.pageX - this.offsetLeft);
              else 
                currentX = actualTouch.pageX - this.offsetLeft
          })
      }

      function loadAppropriateImage(newX) {

          if (currentX - newX > 25 ) {
          // 	console.log("currentX =" + currentX +" newX =" +newX)
          // console.log("currentX-newX="+ (currentX - newX) );
              currentX = newX;
              currentImage = --currentImage < 1 ? $imgTotal : currentImage;
              // console.log("currentImage="+currentImage);
              $divID.css("background-image", "url(" + $imgCarpeta + currentImage + "_" + $modelo + "." + $imgExtension + ")");
          } else if (currentX - newX < -25) {
            // console.log("currentX =" + currentX +" newX =" +newX);
          // console.log("currentX-newX="+ (currentX - newX) );
              currentX = newX;
              currentImage = ++currentImage > $imgTotal ? 1 : currentImage;  
              // console.log("currentImage="+currentImage)              
              $divID.css("background-image", "url(" + $imgCarpeta + currentImage + "_" + $modelo + "." + $imgExtension + ")");
          }
          
      }

      function forceLoadAllImages(id, carpeta, total, extension, modelo) {
        //load the first image
          var loadedImages = 2;
          var appropriateImageUrl = carpeta + "1_"+modelo+"." + extension;
          id.css("background-image", "url(" + appropriateImageUrl + ")");
          
          $("<img/>").attr("src", appropriateImageUrl).on('load', function() {
              // id.height(this.height).width(this.width);
          });

          //load all other images by force
          for (var n = 2; n <= total; n++) {
              appropriateImageUrl = carpeta + n+"_"+modelo+"." + extension;
              id.append("<img src='" + appropriateImageUrl + "' style='display:none;'>");
              $("<img/>").attr("src", appropriateImageUrl).css("display", "none").on('load', function() {
                  loadedImages++;
                  if (loadedImages >= total) {
                      $("#VCc").removeClass("onLoadingDiv");
                      $("#VCc").text("")
                  }
              });
          }
          // console.log(id);
      }

      function initializeOverlayDiv(id) {
          $("html").append("<style type='text/css'>.onLoadingDiv{background-color:#00FF00;opacity:0.5;text-align:center;font-size:2em;font:color:#000000;}</style>")
          $(id).html("<div id='VCc' style='height:100%;width:100%;' class='onLoadingDiv'>Loading...</div>");
      }

      initializeOverlayDiv($divID);
      forceLoadAllImages($divID, $imgCarpeta, $imgTotal, $imgExtension, $modelo);
      //loadAppropriateImage();
      assignOperations($divID);
  };

  $.vc3dEye.defaults = {
    // selector: $('#myCar'),
    imagePath: '/img/',
    totalImages: 36,
    imageExtension: 'png',
    modeloCar: 'corolla'
  };

})( jQuery );