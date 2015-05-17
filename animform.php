<html>
      <head>
            <meta charset="UTF-8" />
            <title>Animaatiotesti</title>
            <style>
                  #oma-animoitava {
                     width: 400px;
                     height: 400px;
                     animation-name: oma_animaatio;
                     animation-duration: <?php echo $_POST['duration']; ?>;
                     animation-direction: <?php echo $_POST['direction']; ?>;
                     animation-timing-function: <?php echo $_POST['function']; ?>;
                     animation-iteration-count: infinite;
                     -webkit-animation-name: oma_animaatio;
                     -webkit-animation-duration: <?php echo $_POST['duration']; ?>;
                     -webkit-animation-direction: <?php echo $_POST['direction']; ?>;
                     -webkit-animation-timing-function: <?php echo $_POST['function']; ?>;
                     -webkit-animation-iteration-count: infinite;
                  }
                  @-webkit-keyframes oma_animaatio {
                     <?php echo $_POST['keyframes']; ?>
                  }
                  @keyframes oma_animaatio {
                     <?php echo $_POST['keyframes']; ?>
                  }
            </style>
      </head>
      <body>
            <div id="oma-animoitava">Piip</div>
      </body>
</html>
