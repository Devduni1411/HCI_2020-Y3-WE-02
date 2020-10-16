<?php include 'header.php'; ?>

<style>


  
   body{
    padding: 0px;
    margin: 0px;  
    font-family: sans-serif;
  }   

.container{
      width: 100%;
      margin: auto;
      overflow: hidden;
    }
    /* contact form css */

	body {
		background: #ffffff;
	
}
		
/* Type (textwith balck)*/

	body, input, select, textarea {
		color: #131212;
        font-family: sans-serif;
        font-size: 16px;
		font-weight: 300;
        letter-spacing: 2px;
		line-height: 1.65;
	}

	@media screen and (max-width: 1280px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 360px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

	#contact-section .container h1{
		text-align: center;
		  /* text-decoration-color:red; */
		  text-underline-position: under;
		  color: rgb(28, 35, 122);
		  letter-spacing: 2px;
		  font-family: sans-serif;
		  
	  }
  
	  #contact-section .container p{
		text-align: center; 
		width: 70%; 
		 margin-left: auto;
		 margin-right: auto; 
		 padding-bottom: 3%;
		 color: rgb(10, 8, 8);
		 letter-spacing:2px;
		 font-size: 20px;
		 font-family: sans-serif;
	  }
	 h2, h4, h5, h6 {
		color: #ffffff;
		font-weight: 600;
		line-height: 1.45;
		margin: 0 0 1em 0;
	}
	h3{
		text-align: center; 
		width: 70%; 
		margin-left: auto;
		 margin-right: auto; 
		 padding-bottom: 3%;
		 color: rgb(15, 15, 15);
		 letter-spacing:2px;
	  }

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			border-bottom: 0;
		}

	h1 {
		font-size: 40px;
	}

	h3 {
		font-size: 22px;

	}

	h4 {
		font-size: 16px;
	}

	
/* contact form header */
  header.major {
		width: max-content;
		margin-bottom: 32px;
	}

		header.major > :first-child {
			width: calc(100% + 8px);
		}
	  
/* Form */

	form {
		margin: 30px;
	}

	form > .fields {
		
			display: flex;
			flex-wrap: wrap;
			width: calc(100% + 48px);
			margin: -1.5em 0 2em -1.5em;
		}

			form > .fields > .field {
				
				padding: 1.5em 0 0 1.5em;
				width: calc(100% - 24px);
			}

				form > .fields > .field.half {
					width: calc(50% - 12px);
				}
	

	label {
		color: #0a0a0a;
		display: block;
		font-size: 0.8em;
		font-weight: 600;
		letter-spacing: 2px;
		margin: 0 0 1em 0;
		text-transform: uppercase;
	}

	input[type="text"],
	textarea {
		background-color: white;
		border-color: #eea236;
		outline: 0;
		width: 100%;
	}
	
        input[type="text"]:focus,
		select:focus,
		textarea:focus {
			box-shadow: 0 0 0 2px #eea236;;
		}
		select option {
			color: #ffffff;
			background: #eea236;
		}

	input[type="text"],
	textarea {
		padding: 0.75em 1em;
	}
	
/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
		
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
			
		}

		.icon > .label {
			display: none;
		}

		.icon.alt:before {
			background-color: #211a4b;
			border:2px solid#eea236;
			border-radius: 100%;
			color: #ffffff;
			display: inline-block;
			height: 40px;
			line-height: 40px;
			text-align: center;
			touch-action: manipulation;
		    cursor: pointer;
			width: 40px;
		}



/* Button */

	input[type="submit"],
	button,
	.button {
		
		font-size: 13px;
		font-weight: 600;
	    letter-spacing: 1px;
		line-height: 56px;
		padding: 0 28px;
		margin:5px -100px;
		text-transform: uppercase;
		white-space: nowrap;
		touch-action: manipulation;
		cursor: pointer;
	}
	/* button colors of background & letters */
		input[type="submit"].primary,
		button.primary,
		.button.primary {
			color: #fff;
			background-color: #f0ad4e;
		    border-color: #eea236;
			
		}
		
			input[type="submit"].primary:active,
			button.primary:active,
			.button.primary:active {
				background-color: #f0ad4e;
			}

/* Contact -----------------*/
	
	.contact,
	#contact {
		border-bottom: solid 1px rgba(38, 38, 151, 0.1);
		overflow-x: hidden;
	}
	.contact > .inner,
		#contact > .inner {
			display: flex;
		}
/* contact vertical line*/
			.contact > .inner > :nth-child(2n - 1),
			#contact > .inner > :nth-child(2n - 1) {
				padding: 64px 48px 32px 0 ;
				border-right: solid 1px rgba(22, 22, 82, 0.1);
				width: 60%;
			}

			.contact > .inner > :nth-child(2n),
			#contact > .inner > :nth-child(2n) {
				padding-left: 3em;
				width: 40%;
			}

			.contact > .inner > .split,
			#contact > .inner > .split {
				padding: 0;
			}

				.contact > .inner > .split > *,
				#contact > .inner > .split > * {
					padding: 48px 0 16px 48px ;
					position: relative;
				}

				/* contact horizontal line*/
					.contact > .inner > .split > *:before,
					#contact > .inner > .split > *:before {
						border-top: solid 1px rgba(8, 8, 245, 0.1);
						content: '';
						display: block;
						margin-left: -48px;
						position: absolute;
						top: 0;
						width: calc(100vw + 10em);
					}

		@media screen and (max-width: 980px) {

			.contact > .inner,
			#contact > .inner {
				display: block;
			}
}

	
</style>


 <!--- map/icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <br> 
    <!-- contact section -->
    <section id="contact-section">
        <div class="container">
             <h1>Contact Us</h1><br>
           <p>Email us and keep upto date with our latest news</p>
           
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798001200673!2d79.86642251427702!3d6.914738395003781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25971523c4509%3A0x6cfd41efdc73743!2sMusaeus%20College!5e0!3m2!1sen!2slk!4v1596611742831!5m2!1sen!2slk" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
         
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h3>Use this below form to contact us... </h3>
								</header>

								<form >
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" placeholder="Anna Josh" required />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" placeholder="anna@gmail.com" required />
										</div>
										<div class="field half">
											<label for="phone">Phone Number</label>
											<input type="text" name="phone" id="phone"  placeholder="+94 (77) 123 4567" />
										</div>
										<div class="field half">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" placeholder="Subject of your message" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6" placeholder="What's on your mind?"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Submit Form" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">info@musaeus.lk</a><br>
										<a href="#">principal@musaeus.lk</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+94 11 268 6532</span>
										<br>
										<span>+94 11 269 5048</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-map-marker"></span>
										<h3>Address</h3>
										<span>No 58, <br> Rosemead Place, <br>Colombo 07, <br> Sri Lanka</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										
										
										<span></span>
									</div>
								</section>
							</section>
						</div>
					</section>

       
<?php include 'footer.php'; ?>