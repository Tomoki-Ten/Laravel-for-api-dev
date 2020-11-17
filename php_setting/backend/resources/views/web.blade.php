<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"> -->
  <title>Posts</title>
</head>
<body>
  <header>
    <h1>Api Application</h1>
  </header>
  <main>
    <div>
      <label for="title-form">Title:</label>
      <input type="text" id="title-form"><br>
      <label for="post-form">Post:</label>
      <input type="text" id="post-form"><br>
      <label for="id-form">Id:</label>
      <input type="number" id="id-form">
    </div>
    <div>
      <input type="button" value="GET" id="get-btn"
      class="btn btn-success">
      <input type="button" value="POST" id="post-btn" class="btn btn-primary">
      <input type="button" value="PUT" id="put-btn" class="btn btn-warning">
      <input type="button" value="DELETE" id="delete-btn" class="btn btn-danger">
    </div>
    <div>
      <h2>Check all posts!</h2>
      <ul id="listcontainer">
        <!-- <li>
          <h3>Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, dicta itaque quis consectetur expedita nobis. Rerum molestias ipsa aliquid quis?</p>
        </li> -->
      </ul>
    </div>
  </main>

  
  @include('mainjs')

</body>
</html>