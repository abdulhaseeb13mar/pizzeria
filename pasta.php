<?php include 'header.php'; ?>

	

<title>Pasta</title>
</head>

<body onload="getpagename()">
<div id="success_message"> </div>
        <div class="big" id="b5a">
            <div class="bg" id="b5b"></div>

		
		<div class="container1" id="abc12345" onmouseover="pricedisplay2()" onmouseleave="imgchange(this)" style="top:200px; left:100px;">
		<li>	
			
	<img id="abc123" src="x" class="image"   style="visibility: hidden; ">

	<div class="overlay" onmouseleave="resume()" >
		<p id="overlaytext1" class="overlaytext"> </p>
	 <button class="button button1" onclick="AddToCart(); tick();"  align="center">Add to Cart</button>
	 <div id="custom-selectid" class="custom-select" >

    // <select id="1" style="visibility: hidden;">
    	
    //     <option selected>small</option>
    //     <option>regular</option>
    //     <option>large</option>
    // </select>

    <select id="2" onchange="pricedisplay2()" >
    	
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div> 
	</div>
	
</li>

</div>



<img id="abc123456" src="Assets/pasta1.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:100px;  width: 20%; height: 240px; visibility:visible;">
<img id="abc123456" src="Assets/pasta2.png" onmouseover ="change(this)"  style=" position: absolute; top: 250px; left:500px; width: 20%; visibility: visible;">
<img id="abc123456" src="Assets/pasta3.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:900px;  width: 20%; visibility:visible;">
    
<img id="abc123456" src="Assets/pasta4.png" onmouseover="change(this)"  style=" position: absolute; top: 650px; left:100px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/pasta5.png" onmouseover ="change(this)"  style=" position: absolute; top: 625px; left:500px; width: 20%; visibility: visible;">
<img id="abc123456" src="Assets/pasta6.png" onmouseover="change(this)"  style=" position: absolute; top: 625px; left:900px;  width: 20%; visibility:visible;">
</div>
</div>

</body>

<?php include 'footer.php'; ?>






</html>