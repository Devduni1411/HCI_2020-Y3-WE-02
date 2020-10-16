<?php include 'header.php'; ?>
<?php require 'db_conn.php';?>


<style>
   body{
    padding: 0px;
    margin: 0px;  
    font-family: sans-serif;
   
  }   


 .container{
      width: 90%;
      margin: auto;
      overflow: hidden;
    }
    /* contact form css */


   
    #header-section .container h1{
      text-align: center;
      text-underline-position: under;
      color: rgb(28, 35, 122);
      background-color: #ffffff;
      letter-spacing: 2px;
      font-size: 30px;
        
    }

    #header-section .container p{
      text-align: center; 
      width: 70%; 
      margin-left: auto;
       margin-right: auto; 
       padding-bottom: 3%;
      /* color: rgb(10, 8, 8);*/
      color: black;
       letter-spacing:3px;
       font-family: sans-serif;
       font-size: 20px;
    }

    .main-section {
      background: transparent;
      max-width: 500px;
      width: 95%;
      height: 500px;
      margin: 30px auto;
      border-radius: 10px;
    }
    
    .add-section {
      width: 100%;
      background: rgb(214, 208, 208);
      margin: 0px auto;
      padding: 10px;
      border-radius: 5px;
    }
    
    .add-section input {
      display: block;
      width: 95%;
      height: 55px;
      margin: 10px auto;
      border: 2px solid #ccc;
      font-size: 16px;
      border-radius: 5px;
      padding: 0px 5px;
    }

    .add-section textarea {
      display: block;
      width: 95%;
      height: 90px;
      margin: 10px auto;
      border: 2px solid #ccc;
      font-size: 16px;
      border-radius: 5px;
      padding: 0px 5px;
    }

    .add-section button {
      display: block;
      width: 95%;
      height: 40px;
      margin: 0px auto;
      border: none;
      outline: none;
      background: #f0ad4e;;
      color: #fff;
      font-family: sans-serif;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .add-section button:hover {
      box-shadow: 0 2px 2px 0 #ccc, 0 2px 3px 0 #ccc;
      opacity: 0.7;
    }
    
     #errorMes {
      display: block;
      background: #f2dede;
      width: 95%;
      margin: 0px auto;
      color: rgb(139, 19, 19);
      padding: 10px;
      height: 35px;
    }
    
    .show-todo-section {
      width: 70%;
      background: #fff;
      margin: 80px auto;
      padding: 10px;
      border-radius: 5px;
    }
    
    .todo-item {
      width: 100%;
      margin: 10px auto;
      padding: 20px 10px;
      box-shadow: 0 4px 8px 0 #ccc, 0 6px 20px 0 #ccc;
      border-radius: 5px;
    }
    
    .todo-item h2 {
      display: inline-block;
      padding: 5px 0px;
      font-size: 17px;
      font-family: sans-serif;
      color: #555;
    }

    .todo-item h4 {
      display: inline-block;
      padding: 5px 0px;
      font-size: 17px;
      font-family: sans-serif;
      color: #555;
    }
    
    
    .todo-item small {
      display: block;
      width: 100%;
      padding: 5px 0px;
      color: #888;
      padding-left: 30px;
      font-size: 14px;
      font-family: sans-serif;
    }
    
    .remove-to-do {
      display: block;
      float: right;
      width: 20px;
      height: 20px;
      font-family: sans-serif;
      color: rgb(139, 97, 93);
      text-decoration: none;
      text-align: right;
      padding: 0px 5px 8px 0px;
      border-radius: 50%;
      transition: background 1s;
      cursor: pointer;
    }
    
    .remove-to-do:hover {
      background: rgb(139, 97, 93);
      color: #fff;
    }
    
    .checked {
      color: #999 !important;
      text-decoration: line-through;
    }
    
    .todo-item input {
      margin: 0px 5px;
    }
    
    .empty {
      font-family: sans-serif;
      font-size: 16px;
      text-align: center;
      color: #cccc;
    }

</style>


<br>
 <!-- header section -->
 <section id="header-section">
            <div class="container">
                 <h1>Guest Book</h1><br>
               <p>Please send us your comments and suggestions</p>

               <div class="main-section">
                   <div class="add-section">
                   <form action="app/add.php" method="post" autocomplete="off">
                       <div class="form-group">
                       <input type="text"  class="form-control" name="name" id="name"placeholder="Your name" required=""><br>
                       </div>
                       <div class="form-group">
                       <input type="Email" class="form-control" id="email" name="email" placeholder="Your email" required=""><br>
                       </div>
                        <div class="form-group">
                       <input type="text" class="form-control" id="website" name="website" placeholder="Website"><br>
                       </div>
                       <div class="form-group">
                       <textarea name="message" class="form-control" id="message" name="message" placeholder="Your message" rows="3" required=""></textarea>
                      </div> 
                        <button class="btn btn-warning" style="width:25rem; text-transform:uppercase;">Submit</button>  
                    </div>
                  </form>  
              </div>

              <?php
                 $guestbook = $conn->query("SELECT * FROM guestbook ORDER BY id DESC");
              ?>
                  <div class="show-todo-section"> 
                      <?php if($guestbook->rowCount() <= 0){ ?>
                          <div class="todo-item">
                            <div class="empty">
                              <img src="assets/manisha/img/abc.jpg" width="100%" />
                              <img src="assets/manisha/img/Ellipsis.gif" width="20%">
                           </div>
                         </div>
                      <?php } ?>

                      <?php while($todo = $guestbook->fetch(PDO::FETCH_ASSOC)) { ?>
                          <div class="todo-item">
                                  <span id="<?php echo $todo['id']; ?>" class="remove-to-do">x</span>
                                <?php if($todo['checked']){ ?> 
                                      <input type="checkbox" class="check-box" checked/>
                                      <h2> <?php echo $todo['message']?> </h2>
                                <?php }else { ?>
                                  <input type="checkbox" class="check-box"/> 
                                  <h4><?php echo $todo['name']?></h4><br>
                                  <h2><?php echo $todo['message']?></h2>
                                <?php } ?>
                                  <br>
                                  <small>Created:<?php echo $todo['date_time']?></small>
                          </div>
                      <?php } ?>
                </div>
            </div>

           

          
<?php include 'footer.php'; ?>