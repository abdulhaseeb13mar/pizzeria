<?php include 'header.php'; ?>

	

<title id="title">Ice Cream</title>
</head>

<body onload="getpagename()">
<div id="success_message"> </div>

        <div class="big" id="b7a">
            <div class="bg" id="b7b"></div>

		    <p id="pizzaNamesID" class="pizza names" style=" position:absolute; font-size:30px; margin-top:525px; margin-left:90px; font-family:'cabin sketch'; color:#ff7733; "> Strawberry Ice Cream  </p>
    <p id="pizzaNamesID" class="pizza names" style=" position:absolute; font-size:30px; margin-top:525px; margin-left:590px; font-family: 'cabin sketch'; color:#ff7733; "> Kulfa  </p>
    <p id="pizzaNamesID" class="pizza names" style=" position:absolute; font-size:30px; margin-top:525px; margin-left:970px; font-family:'cabin sketch'; color:#ff7733; "> VANILLA  </p>

    <p id="pizzaNamesID" class="pizza names" style=" position:absolute; font-size:30px; margin-top:918px; margin-left:150px; font-family:'cabin sketch'; color:#ff7733; "> Chocolate  </p>

		
		<div class="container1" onmouseover="pricedisplay()" id="abc12345" onmouseleave="imgchange(this)" style="top:200px; left:100px;">
		<li>	
			
	<img id="abc123" src="x" class="image"   style="visibility: hidden; ">

	<div class="overlay" onmouseleave="resume()" >
		<p id="overlaytext1"  class="overlaytext"> </p>
	 <button class="button button1" onclick="AddToCart(); tick();" align="center">Add to Cart</button>
	 <div  id="custom-selectid" class="custom-select" >
  
     <select id="1" style="visibility: hidden;" >
        <option>small</option>
        <option>regular</option>
        <option>large</option>
    </select> 

    <select id="2"  onchange="pricedisplay()"  style="visibility: visible;" >
    	
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div> 
	</div>
	
</li>

</div>

<img id="abc123456" src="Assets/dessert1.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:100px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert2.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:500px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert3.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:900px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert4.png" onmouseover="change(this)"  style=" position: absolute; top: 650px; left:100px;  width: 20%; visibility:visible;">
</div>
</div>
</body>

<?php include 'footer.php'; ?>




</html>