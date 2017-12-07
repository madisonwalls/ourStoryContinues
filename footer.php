
      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript">
    function showStories(state){
      var htmlString = "<p><?= $storie['name']; ?></p><p><?= $storie['age']; ?></p><p><?= $storie['state']; ?></p><p><?= $storie['story']; ?></p>";
      console.log("clicked");
      document.getElementById('stories-page').innerHTML = htmlString;
    }
    </script>
  </body>
</html>
