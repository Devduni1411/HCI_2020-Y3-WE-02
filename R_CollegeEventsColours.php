<?php include 'header.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

#news
{

}
#news .news_details
{
    padding: 60px 0;
}
#news .news_details h2
{
	font-family: 'Abril Fatface', cursive;
    color: #222533;
    margin-bottom: 12px;
}
#news .news_details h2 span
{
	color:#f0ad4e;
}
#news .news_details h5
{
	font-family: 'Pacifico', cursive;
    color: #3c3f4b;
    font-size: 16px;
}

#news .news_details p
{

}

#news .news_details a
{
    padding: 10px 20px;
    background: #f0ad4e;
    color: #ffffff;
    text-transform: uppercase;
    border: none;
    display: inline-block;
    margin-top: 10px;
}

#news .news_details hr {
    margin-top: 16px;
    margin-bottom: 16px;
    border: 0;
    border-top: 1px solid #34374436;
}
</style>

<section id="service">
	<div class="container">
		<div class="row">
            <div class="row flex">
				<h2>COLLEGE EVENTS</h2>
			</div>
            <div class="topic_underline"></div>



    <div class="row">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

  <section id="about">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="news_details">
					<h2>Colours Awarding Ceremony</h2>
					<hr>
                    <img src="assets/rukshan/collegeEvents/colours.jpg" alt="" class="img-responsive">
					<br>
                    <p>The first prize giving of Royal College has been held in the year 1836.
						 From the inception, the head of the state has graced this occasion as chief guest. 
						 During colonial rule, the British governors had taken a paternal interest in the school 
						 and it gradually became a tradition for the ruler of the country to be chief guest for the occasion.
						 Today, the event is held under the patronage of the President of Sri Lanka.</p>
						<br>
						 <p>There are one hundred and sixty five prizes and awards handed out each year and the College Main Hall
							  carries the names of those students who have won the Panel Prizes. The Turnour prize is the oldest of 
							  the panel prizes, awarded continually from the year 1846 itself.  The most coveted prize at this event 
							  is the Dornhorst Memorial Prize, awarded since 1930 to the most popular student each year, 
							  in the memory of Frederick Dornhorst, KC, 
							 followed by the Lalith Athulathmudali Memorial Prize for the most outstanding Royalist of the year</p>	 
					<hr>
					
				</div>
			</div>
</section>


  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-bottom:50px">


  <div class="list-group">
  <a href="R_CollegeEventsDetails.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Prize Awarding Ceremony</u></b></h4>
</div>
    <p>The first prize giving of Royal College has been held in the year 1836. From the inception, 
		the head of the state has graced this occasion as chief guest. During colonial..</p>
  </a>



  <a href="R_CollegeEventsColours.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Colours Awarding Ceremony</u></b></h4>
</div>
    <p>The colours night is considered a very special event in the calendar of Royal and is held in order to
        recognize excellence in sports.
         Royal College boasts the fact that it’s very first colours night in 1922 was the first such
                 ceremony in Sri Lanka.</p>
  </a>

  
  <a href="R_CollegeEventsAthletics.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Athletics Meet</u></b></h4>
</div>
    <p>The students are divided into five houses. Formally four houses were established in 1918 by 
          Principal Hartley with the names Cinnamon Gardens, Bambalapitiya North & South and Colpetty. 
        They ,</p>
  </a>


  <a href="" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Clubs and Societies Felicitation Ceremony</u></b></h4>
</div>
    <p>The inaugural clubs and societies felicitation ceremony was first organized by the Prefects’ Council 
        of Royal College 2009/2010 and was held at the Navarangahala on the 26th of November. 
        The....</p>
  </a>

  <a href="" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>General Assembly </u></b></h4>
</div>
    <p>Out of the many traditions associated with the legendary Battle of the Blues that a 
		royalist has the privilege of experiencing during his tenure within the hallowed...
	 </p>
  </a>
</div>

<a href="" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Battle of the Babies </u></b></h4>
</div>
    <p>The most anticipated event of the year in the Sri Lankan school calendar is probably the 
         Museaus – Vishaka ‘Big match’.The match is looked forward to by both young and old, 
        male and female and even those who
         has no connection with either school </p>
  </a>
</div>


  </div>
</div>




<div class="clearfix"></div>

</div>
</section>


<script>

$('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#myList a[href="#profile"]').tab('show') // Select tab by name
$('#myList a:first-child').tab('show') // Select first tab
$('#myList a:last-child').tab('show') // Select last tab
$('#myList a:nth-child(3)').tab('show') // Select third tab

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "None";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>

<?php include 'footer.php'; ?>