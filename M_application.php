<?php include 'header.php'; ?>
    
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
  /*header */


  #contact-section{
   
    background-size: cover;
    background-position: center;
    height: 100%;
    width: 100% ;
    padding-bottom: 2%;
  }

  #contact-section .container h1{
    text-align: center;
      /* text-decoration-color:red; */
      text-underline-position: under;
      color: rgb(28, 35, 122);
      letter-spacing: 2px;
      font-size: 30px;
    }


  /*cards  */
    
.row {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-flow: wrap;
}

.card {
  width: 20%;
  background: #fff;
  border: 1px solid #ccc;
  margin-bottom: 50px;
  transition: 0.3s;
}

.card-header {
  text-align: center;
  padding: 50px 10px;
  background: linear-gradient(to right, #a8d8c0, #b49bd4);
  color: #fff;
}

.card-body {
  padding: 1px 20px;
  text-align: center;
  font-size: 18px;
}

.card-body .btn {
  display: block;
  color: #fff;
  text-align: center;
 /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
  border-color: #f0ad4e;
  background-color: #f0ad4e;
  margin-top: 30px;
  margin-left : 2.5px;
  text-decoration: none;
  padding: 10px 5px;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 40px -10px rgba(233, 218, 13, 0.25);
}

@media screen and (max-width: 1000px) {
  .card {
    width: 40%;
  }
}

@media screen and (max-width: 620px) {
  .container {
    width: 100%;
  }

  .heading {
    padding: 20px;
    font-size: 20px;
  }

  .card {
    width: 80%;
  }
}

 </style>
 
     <!-- contact section -->
     <section id="contact-section">
        <div class="container"><br>
             <h1>School Applications</h1><br><br>
           
     
             <div class="row">
                <div class="card">
                  <div class="card-header">
                    <h1>Nursery</h1>
                  </div><br>
                  <div class="card-body">
                    <p>Application form for the students age 3-4  who expect to enroll to pre-school in year 2021</p><br><br>
                    <a href="/HCI/assets/manisha/resources/downloads/nurseryApplication.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                </div>
                </div>


                <div class="card">
                  <div class="card-header">
                    <h1>Grade 1</h1>
                    </div><br>
                  <div class="card-body">
                    <p> Application form for the students who expect to enroll to grade 1 in the year 2021</p><br><br>
                    <a href="/HCI/assets/manisha/resources/downloads/Grade1Application2021.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                    <h1>Grade 6</h1>
                  </div><br>
                  <div class="card-body">
                     <p>Application form for the students who expect to enroll to grade 6 classes year 2021 </p><br><br>
                    <a href="/HCI/assets/manisha/resources/downloads/schoolApplication.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                  </div><br>
                </div>


                <div class="card">
                  <div class="card-header">
                    <h1>Grade 12</h1>
                  </div><br>
                  <div class="card-body">
                    <p>Application form for the students who expect to enroll to advanced level classes</p><br><br>
                    <a href="/HCI/assets/manisha/resources/downloads/schoolApplication.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                  </div>
                </div>


                <div class="card">
                    <div class="card-header">
                      <h1>Past Pupils</h1>
                    </div><br>
                    <div class="card-body">
                      <p>Application form to enter daughters of Past Pupils Association in Musaeus Collage</p><br><br>
                      <a href="/HCI/assets/manisha/resources/downloads/PAST-PUPILS-DAUGHTERS_-ADMISSION-FORM-TO-SCHOOL.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                    </div>
                  </div>


                  <div class="card">
                    <div class="card-header">
                      <h1>Life Membership</h1>
                    </div><br>
                    <div class="card-body">
                      <p>Application form to enrolled as a Life Member of the Past Pupils’ Association </p><br><br>
                      <a href="/HCI/assets/manisha/resources/downloads/membership_form.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                    </div>
                  </div>


                  <div class="card">
                    <div class="card-header">
                      <h1>Society Membership</h1>
                    </div><br>
                    <div class="card-body">
                      <p>Application form for students who expect to enroll to school societies</p><br><br>
                      <a href="/HCI/assets/manisha/resources/downloads/srtsl_membership_application_new__1.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                    </div>
                  </div>


                 
                  <div class="card">
                    <div class="card-header">
                      <h1>Staff Library Membership</h1>
                    </div><br>
                    <div class="card-body">
                      <p>Application form for teachers who expect to register for library membership </p><br><br>
                      <a href="/HCI/assets/manisha/resources/downloads/LIBRARY-REGISTRATION-FOR-STAFF-MEMBERS.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a><br>
                    </div>
                  </div>


                  <div class="card">
                    <div class="card-header">
                      <h1>Leave From School</h1>
                    </div><br>
                    <div class="card-body">
                      <p>Application form for the students who expect to leave from the Collage </p><br><br>
                      <a href="/HCI/assets/manisha/resources/downloads/schoolApplication.pdf"><button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button></a>
                    </div>
                  </div>

              </div>
            </div>

        

   <?php include 'footer.php'; ?>