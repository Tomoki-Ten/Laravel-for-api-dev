<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    #imagecontainer > img{
      width: 200px;
      height: 200px;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div>
    <label for="title-form">Title:</label>
    <input type="text" id="title-form">
    <label for="image-form">Image:</label>
    <input type="file" id="image-form">
  </div>
  <div><img src="" alt="preview" height="200" id="preview"></div>
  <div>
      <input type="button" value="GET" id="get-btn"
      class="btn btn-success">
      <input type="button" value="POST" id="post-btn" class="btn btn-primary">
      <input type="button" value="PUT" id="put-btn" class="btn btn-warning">
      <input type="button" value="DELETE" id="delete-btn" class="btn btn-danger">
  </div>
  
  <ul id="imagecontainer">
  </ul>

  @include('imagejs')
</body>
</html>