<?php include 'header.php'; ?>
	

<title id="title">Salad</title>
</head>

<body onload="getpagename()">
<div id="success_message"> </div>

        <div class="big" id="b12a">
            <div class="bg" id="b12b"></div>

		
        <p id="pizzaNamesID" class="pizza names" style=" position:absolute; font-size:30px; margin-top:520px; margin-left:195px; font-family:'cabin sketch'; color:#ff7733; "> Salad  </p>

		<div class="container1"  onmouseover="pricedisplay()" id="abc12345" onmouseleave="imgchange(this)" style="top:200px; left:100px;">
		<li>	
			
	<img id="abc123" src="x" class="image"   style="visibility: hidden; ">

	<div class="overlay" onmouseleave="resume()" >
		<p id="overlaytext1" class="overlaytext"> </p>
	 <button class="button button1"  onclick="AddToCart(); tick();" align="center">Add to Cart</button>
	 <div id="custom-selectid" class="custom-select" >

    <select id="1" style="visibility: hidden;" >
    	
        <option>small</option>
        <option>regular</option>
        <option>large</option>
        <option>jumbo</option>
    </select>

    <select id="2" onchange="pricedisplay()">
    	
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

<img id="abc123456" src="Assets/app13.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:100px;  width: 20%; visibility:visible;">
</div>
</div>
</body>



<?php include 'footer.php'; ?>




</html>