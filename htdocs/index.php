<?
include 'libs/load.php';
?>
<html>

<head>
    <title>
        Portfolio
    </title>
    <!-- <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png"type="image/x-icon"/>  -->
    <link rel="icon" href="/assets/img/curriculum-vitae-svgrepo-com.svg" type="image/icon type">
    <!-- ---Header------Start------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="icon" href="../project/assets/img/cv.png"/> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    
    
    <!-- ---Header------End------------ -->
</head>

<body>
    <!-- ---------navbar-------Start------- -->
    <?load_template('navbar');?>
     <!-- --------navbar----Hero------------- -->
    <!-- --------Start-----Hero------------- -->
    <?load_template('hero');?>
    <!-- --------End-----Hero------------- -->
    </div>
    <!-- -----------------about-------Start------- -->
    <?load_template('about');?>
    <!-- -----------------about-------End------- -->
    <!-- -----------------Skill-------Start------- -->
    <?load_template('skill');?>
    <!-- -----------------Skill-------End------- -->
    <br><br>
    <!-- -----------------resume-------Start------- -->
    <?load_template('resume');?>
    <!-- -----------------resume-------End------- -->
    <!-- -----------------resume-------Start------- -->
        <?load_template('contect');?>
    <!-- -----------------resume-------End------- -->
    <!-- -----------------resume-------Start------- -->
    <?load_template('footer');?>
    <!-- -----------------resume-------End------- --> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="assets/js/App.js"></script>
            
            <script>
                $(document).ready(function () {
                    $('#copy-button-PhoneNO').click(function () {
                        navigator.clipboard.writeText('+919677803688');
                    });
                    $('#copy-button-mailID').click(function () {
                        navigator.clipboard.writeText('sadh.sh12@gmail.com');
                    });
                });
                // -------PHONE NUMBER-------------
                const toastTrigger1 = document.getElementById('copy-button-PhoneNO')
                const toastLiveExample1 = document.getElementById('liveToast')

                if (toastTrigger1) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample1)
                toastTrigger1.addEventListener('click', () => {
                    toastBootstrap.show()
                });
                }
                // -----Email ID---------------
                const toastTrigger2 = document.getElementById('copy-button-mailID')
                const toastLiveExample2 = document.getElementById('liveToast')

                if (toastTrigger2) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample2)
                toastTrigger2.addEventListener('click', () => {
                    toastBootstrap.show()
                });
                }







                // --------------------
                (function( $ ){
  
  $.fn.textAnimation = function( animation_speed, text_speed, animation ){
    var text, i = 0;
    var $this = $(this);
    
    // store text and clear
    text = $this.text();
    $this.css('white-space', 'pre');
    $this.html('');
    
    var addLetter = setInterval(function(){
      $this.append('<div class="text_animation" style="display: inline-block; animation: ' + animation + ' ' + animation_speed + 'ms forwards">' + text[i] + '</div>');
      i++;
      if (i == text.length) clearInterval(addLetter);
    }, text_speed);
  }
})( jQuery )


var temp = $('.bounce_in_animation').text();
var i = 1;

$('.bounce_in_animation').textAnimation(250, 50, 'bounceIn');

setInterval(function(){
  i %= 4;
  $('.bounce_in_animation').html(temp);
  switch(i) {
    case 0:
      $('.bounce_in_animation').textAnimation(250, 50, 'bounceIn');
      break;
    case 1:
      $('.bounce_in_animation').textAnimation(250, 50, 'slideDown');
      break;
    case 2:
      $('.bounce_in_animation').textAnimation(250, 50, 'slideUp');
      break;
    default:
      $('.bounce_in_animation').textAnimation(250, 50, 'spinIn');
          }
  i++;
}, 1000 + 50 * temp.length + 250)
            </script>
            <!-- <script>
              const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
               const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
            </script>   -->





</body>

</html>