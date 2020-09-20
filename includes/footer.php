  <div id="footer">
    <?php echo "<h4 style='color:blue;'>Copyright &copy 2020-".date('Y')."</h4>";?>
  </div>
</div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
