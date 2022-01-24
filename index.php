<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ACOMM</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <div align="center" class="jumbotron">
    <h1>COMMENT WITH AJAX</h1>
    </div>
    <div class="container">
      <form class="comment_form">
        <div>
          <label for="name">Name:</label>
          <input  type="text" name="name" id='name'><br>
        </div>
        <div>
          <label for="comment">Comment:</label>
          <textarea name="comment" id="comment" rows="8" cols="80"></textarea>
        </div>
        <button type="button" id="submit_btn">POST</button>
        <button type="button" id="update_btn" style="display: none;">UPDATE</button>
      </form>

      <?php echo $comments; ?>
        <!-- <div id="display_area">
            <div class="comment_box">
                <span class="delete">Delete</span>
                <span class="edit">Update</span>
                <div class="display_name">John</div>
                <div class="comment_text">This is some sample text!</div>
            </div>
        </div> -->
    </div>
  </body>
</html>

<script src="jquery.min.js"></script>
<script src="script.js"></script>
