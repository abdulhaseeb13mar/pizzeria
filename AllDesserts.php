<?php include 'header.php'; ?>
<title>Dessert</title>
</head>

<body onload="getpagename()">
<div id="success_message"> </div>

        <div class="big" id="b6a">
            <div class="bg" id="b6b"></div>

		
		<div class="container1" id="abc12345" onmouseover="pricedisplay4()" onmouseleave="imgchange(this)" style="top:200px; left:100px;">
		<li>	
			
	<img id="abc123" src="x" class="image"   style="visibility: hidden; ">

	<div class="overlay" onmouseleave="resume()" >
		<p id="overlaytext1" onmouseover="down()" class="overlaytext"> </p>
	 <button class="button button1" onclick="AddToCart(); tick();"  align="center">Add to Cart</button>
	 <div id="custom-selectid" class="custom-select" >

 <select id="3" onmouseover="pricedisplay4()">
        <option>Strawberry</option>
        <option>Chocolate</option>
        <option>Vanilla</option>
        <option>Mango</option>
            </select>
    <!-- <select id="1" style="visibility: hidden;" >
    	
        <option>small</option>
        <option>regular</option>
        <option>large</option>
    </select> -->

    <select id="2" onchange="pricedisplay4()" >
    	
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
<img id="abc123456" src="Assets/dessert2.png" onmouseover ="change(this)"  style=" position: absolute; top: 250px; left:500px; width: 20%; visibility: visible;">
<img id="abc123456" src="Assets/dessert3.png" onmouseover="change(this)"  style=" position: absolute; top: 250px; left:900px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert4.png" onmouseover="change(this)"  style=" position: absolute; top: 650px; left:100px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert5.png" onmouseover="change(this)"  style=" position: absolute; top: 650px; left:500px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert6.png" onmouseover="change(this)"  style=" position: absolute; top: 650px; left:900px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert7.png" onmouseover="change(this)"  style=" position: absolute; top: 1050px; left:100px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert8.png" onmouseover="change(this)"  style=" position: absolute; top: 1050px; left:500px;  width: 20%; visibility:visible;">
<img id="abc123456" src="Assets/dessert9.png" onmouseover="change(this)"  style=" position: absolute; top: 1050px; left:900px;  width: 20%; visibility:visible;">
</div>
</div>
</body>
<?php include 'footer.php'; ?>










</html>