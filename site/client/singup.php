<div class="container">
  <h1 class="heding">Singup</h1>

  <form method="POST" action="./server/requests.php">
    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="username" class="form-label">User name</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter User Name">
    </div>

    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="email" class="form-label">Enter user Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter User Email">
    </div>

    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
    </div>

    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="address" class="form-label">address</label>
      <input type="text" name="address" class="form-control" id="address" placeholder="address">
    </div>

    <div class="col-6 offset-sm-3 margin-bottom-15">
      <button type="submit" name="signup" class="btn btn-primary">Singup</button>
    </div>
  </form>

</div>