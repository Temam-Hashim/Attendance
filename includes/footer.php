   <!-- close container -->
<style>
  footer {
    clear: both;
    position: relative;
    height: 200px;
    margin-top: -200px;
    }

</style>
   </div>
  <div id="footer" class="footer text-center card border-dark text-dark" style="background:lightblue;max-width: auto;">
   <p class="text-center">
    <?php echo "<h4 style='color:blue;'>Copyright &copy PHP Training Registration".date('Y')."</h4>";?>
   </p> 
  </div>

 

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
  $( function() {
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange:"-100:+0",
      dateFormat: 'yy-mm-dd'
    });
  } );
  </script>

  </body>
</html>

