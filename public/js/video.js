// var video = document.querySelector('video')
// , container = document.querySelector('#container');

// var setVideoDimensions = function () {
// // Video's intrinsic dimensions
// var w = video.videoWidth
//   , h = video.videoHeight;
 
// // Intrinsic Ratio
// // Will be more than 1 if W > H and less if W < H
// var videoRatio = (w / h).toFixed(2);
 
// // Get the container's computed styles
// //
// // Also calculate the min dimensions required (this will be
// // the container dimentions)
// var containerStyles = window.getComputedStyle(container)
//   , minW = parseInt( containerStyles.getPropertyValue('width') )
//   , minH = parseInt( containerStyles.getPropertyValue('height') );
 
// // What's the min:intrinsic dimensions
// //
// // The idea is to get which of the container dimension
// // has a higher value when compared with the equivalents
// // of the video. Imagine a 1200x700 container and
// // 1000x500 video. Then in order to find the right balance
// // and do minimum scaling, we have to find the dimension
// // with higher ratio.
// //
// // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
// // scale 500 to 700 and then calculate what should be the
// // right width. If we scale 1000 to 1200 then the height
// // will become 600 proportionately.
// var widthRatio = minW / w
//   , heightRatio = minH / h;
 
// // Whichever ratio is more, the scaling
// // has to be done over that dimension
// if (widthRatio > heightRatio) {
//   var newWidth = minW;
//   var newHeight = Math.ceil( newWidth / videoRatio );
// }
// else {
//   var newHeight = minH;
//   var newWidth = Math.ceil( newHeight * videoRatio );
// }
 
// video.style.width = newWidth + 'px';
// video.style.height = newHeight + 'px';
// };

// video.addEventListener('loadedmetadata', setVideoDimensions, false);
// window.addEventListener('resize', setVideoDimensions, false);

/** Document Ready Functions **/
/********************************************************************/

$( document ).ready(function() {
  
      // Resive video
      scaleVideoContainer();
  
      initBannerVideoSize('.video-container .poster img');
      initBannerVideoSize('.video-container .filter');
      initBannerVideoSize('.video-container video');
          
      $(window).on('resize', function() {
          scaleVideoContainer();
          scaleBannerVideoSize('.video-container .poster img');
          scaleBannerVideoSize('.video-container .filter');
          scaleBannerVideoSize('.video-container video');
      });
  
  });
  
  /** Reusable Functions **/
  /********************************************************************/
  
  function scaleVideoContainer() {
  
      var height = $(window).height();
      var unitHeight = parseInt(height) + 'px';
      $('.homepage-hero-module').css('height',unitHeight);
  
  }
  
  function initBannerVideoSize(element){
      
      $(element).each(function(){
          $(this).data('height', $(this).height());
          $(this).data('width', $(this).width());
      });
  
      scaleBannerVideoSize(element);
  
  }
  
  function scaleBannerVideoSize(element){
  
      var windowWidth = $(window).width(),
          windowHeight = $(window).height(),
          videoWidth,
          videoHeight;
      
      console.log(windowHeight);
  
      $(element).each(function(){
          var videoAspectRatio = $(this).data('height')/$(this).data('width'),
              windowAspectRatio = windowHeight/windowWidth;
  
          if (videoAspectRatio > windowAspectRatio) {
              videoWidth = windowWidth;
              videoHeight = videoWidth * videoAspectRatio;
              $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
          } else {
              videoHeight = windowHeight;
              videoWidth = videoHeight / videoAspectRatio;
              $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
          }
  
          $(this).width(videoWidth).height(videoHeight);
  
          $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
          
  
      });
  }