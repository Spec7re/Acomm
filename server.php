<?php
    $conn = mysqli_connect('127.0.0.1', 'user', 'password','dbname');

    if(!$conn){
        die('Error '. mysql_error($conn));
    }

    if (isset($_POST['save'])){

        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $sql  = "INSERT INTO comments (name, comment) VALUES ( '{$name}', '{$comment}')";

        if (mysqli_query($conn,$sql)) {

          $id = mysqli_insert_id($conn);
          $saved_comment = '<div class="comment_box">
                <span class="delete" data-id='. $id .'>Delete</span>
                <span class="edit" data-id='. $id .'>Update</span>
                <div class="display_name">' . $name . '</div>
                <div class="comment_text">' . $comment . '</div>
            </div>';

          echo $saved_comment;
        }
        exit();
    }

    if (isset($_POST['update'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $sql  = "UPDATE comments SET name ='{$name}', comment = '{$comment}' WHERE id= '{$id}' ";

        if (mysqli_query($conn,$sql)) {

          $id = mysqli_insert_id($conn);
          $update_comment = '<div class="comment_box">
                <span class="delete" data-id='. $id .'>Delete</span>
                <span class="edit" data-id='. $id .'>Update</span>
                <div class="display_name">' . $name . '</div>
                <div class="comment_text">' . $comment . '</div>
            </div>';

          echo $update_comment;
        }
        exit();
    }

    if (isset($_GET['delete'])){

        $id = $_GET['id'];

        $sql = "DELETE FROM comments WHERE id=".$id ;

        mysqli_query($conn,$sql);
        print('Pass Query');
        exit();
    }

    $sql = 'SELECT * FROM comments order by id desc';

    $result = mysqli_query($conn,$sql);

    $comments =  '<div id="display_area">';
    while ($row = mysqli_fetch_array($result)){
        $comments .= '<div class="comment_box">
              <span aling="center" class="delete" data-id='.$row['id'].'>Delete</span>
              <span class="edit" data-id='.$row['id'].'>Edit</span>
              <div class="display_name">' .$row['name']. '</div>
              <div class="comment_text">' .$row['comment']. '</div>
          </div>';
    }
    $comments .= '</div>';
