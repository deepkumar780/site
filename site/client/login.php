<div class="container">
    <h1 class="heding">Login</h1>
 <form action="./server/requests.php" method="post">

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">Enter user Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter User Email">  
  </div>
 
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="password" placeholder="Enter Password">  
  </div>

<div class="col-6 offset-sm-3 margin-bottom-15">
     <button type="submit" name="login" class="btn btn-primary">Login</button>
 </div>
 
 </form>
</div>