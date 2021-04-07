<html>
    <head>
        <title>Insert</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    
    <body>

<form>
<div class="form-group">
    <label for="exampleFormControlFile1">Book Name</label>
    <input type="text" name="bookname" class="form-control" id="exampleFormControlFile1">

  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_author</label>
    <input type="text" name="book_author" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_category</label>
    <input type="text" name="book_category" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_price</label>
    <input type="text" name="book_price" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_qty</label>
    <input type="text" name="book_qty" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_img2</label>
    <input type="text" name="book_img2" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_file</label>
    <input type="text" name="book_file" class="form-control" id="exampleFormControlFile1">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">book_img1</label>
    <input type="text" name="book_img1" class="form-control" id="exampleFormControlFile1">
    
  </div>


  
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){

    $bookname = $_POST['bookname'];
    $book_author = $_POST['book_author'];
    $book_category = $_POST['book_category'];

    $book_price = $_POST['book_price'];
    $book_qty = $_POST['book_qty'];

    
}


?>