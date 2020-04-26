<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Menu Interface</title>
    
    <style>
        /* set body and section */
body{
	background-color: #EDEDED;
}
section{
  margin-bottom: 60px;
}
/* set position title and total price */
.title, #total{
	float: left;
	font-size: 24px;
}
/*to clear format*/
.clear{
	clear: both;
}
/*set main wrapper*/
.main{
	margin:70px;
	text-align: center;
}
/*set wrapper item*/
.frame-item{
	position: relative;
	width: 90%;
	height: 100px;
	text-align: center;
}
/*set icon frame size*/
.frame-item-1, .frame-item-2, .frame-item-3{
 position: relative;
 border: solid 3px black;
 width: 300px;
 height: 320px;
 float: left;
 margin: 20px;
 margin-top: 3px;
 padding: 5px;
}
/*set icon size*/
.thumb-icon{
 position: relative;
 width: 300px;
 height: 200px;
}
/*set position item name*/
.item-name{
	position: absolute;
	left: 30px;
	font-size: 24px;
	bottom: 60px;
}
/*set position price*/
.item-prize{
	position: absolute;
	left: 30px;
	font-size: 24px;
	bottom: 20px;
}
/*set radio item*/
input[type=radio]{
  width: 35px;
  height: 35px;
}
.item{
	position: absolute;
	bottom: 10px;
  left: 135px;
}
/*set size position*/
.size{
	float: left;
	margin-right: 80px;
}
.label{
	float: left;
  margin-left:5px;
	margin-top: 5px; 
	margin-right: 70px;
}
/*set toppings position*/
td{
	text-align: left;
}
input[type=checkbox]{
  width: 20px;
  height: 20px;
  margin-right: 10px;
  margin-left: 30px;
}
/* set total price position */
#total{
  margin-top: 50px;
  margin-left: -30px;
}

    </style>
	

</head>
<body>
	<div class="main">
		<h1>==== Order Your Pizza Here ====</h1>
		<hr>
		<h2 class="title">Pizza</h2>
		<div class="clear"></div>
		<section class="frame-item">
			<div class="frame-item-1">
				<img src="https://i123.photobucket.com/albums/o317/XtremeGamerX3/pizza.jpg" class="thumb-icon">
				<h3 class="item-name">Pizza 1</h3>
				<h4 class="item-prize">$8</h4>
				<input id="item-1" class="item" type="radio" name="item">
			</div>
			<div class="frame-item-2">
				<img src="https://i909.photobucket.com/albums/ac294/felixbone_2010/meatlovers1.jpg" class="thumb-icon">
				<h3 class="item-name">Pizza 2</h3>
				<h4 class="item-prize">$10</h4>
				<input id="item-2" class="item" type="radio" name="item">
			</div>
			<div class="frame-item-3">
				<img src="https://i833.photobucket.com/albums/zz252/zero6000/pizza/20801971_3300f4e685.jpg" class="thumb-icon">
				<h3 class="item-name">Pizza 3</h3>
				<h4 class="item-prize">$12</h4>
				<input id="item-3" class="item" type="radio" name="item">
			</div>
		</section>
		<div class="clear"></div>
		<section class="size">
			<h2 class="title">Size</h2>
			<div class="clear"></div>
			<input id="small" class="size" type="radio" name="size">
			<input id="medium" class="size" type="radio" name="size">
			<input id="large" class="size" type="radio" name="size">
			<div class="clear"></div>
			<label for="small" class="label">Small</label>
			<label for="medium" class="label">Medium</label>
			<label for="large" class="label">Large</label>							
		</section>
		<div class="clear"></div>
		<section class="toppings">
			<h2 class="title">Toppings</h2>
			<div class="clear"></div>
			<table>
				<tr>
					<td>
						<input id="avocado" class="topping" type="checkbox" name="topping" value="1">
						<label>Avocado</label>
					</td>
					<td>
						<input id="lobster" class="topping" type="checkbox" name="topping" value="2">
						<label>Lobster</label>
					</td>
					<td>
						<input id="bacon" class="topping" type="checkbox" name="topping" value="3">
						<label>Bacon</label>
					</td>
				</tr>
				<tr>
					<td>
						<input id="broccoli" class="topping" type="checkbox" name="topping" value="1">
						<label>Broccoli</label>
					</td>
					<td>
						<input id="oyster" class="topping" type="checkbox" name="topping" value="2">
						<label>Oyster</label>
					</td>
					<td>
						<input id="duck" class="topping" type="checkbox" name="topping" value="3">
						<label>Duck</label>
					</td>
				</tr>
				<tr>
					<td>
						<input id="onions" class="topping" type="checkbox" name="topping" value="1">
						<label>Onions</label>
					</td>
					<td>
						<input id="salmon" class="topping" type="checkbox" name="topping" value="2">
						<label>Salmon</label>
					</td>
					<td>
						<input id="ham" class="topping" type="checkbox" name="topping" value="3">
						<label>Ham</label>
					</td>
					<tr>
						<td>
							<input id="zucchini" class="topping" type="checkbox" name="topping" value="1">
							<label>Zucchini</label>
						</td>
						<td>
							<input id="tuna" class="topping" type="checkbox" name="topping" value="2">
							<label>Tuna</label>
						</td>
						<td>
							<input id="sausage" class="topping" type="checkbox" name="topping" value="3">
							<label>Sausage</label>
						</td>
					</tr>
				</tr>
			</table>
		</section>
		<section class="total-price">
			<h2 class="title">Price</h2>
			<p id="total">$0</p>
		</section>
	</div>
	
	<script>
	    // Variable declaration
	var item1Price = 8;
	var item2Price = 10;
	var item3Price = 12;
  var itemPrice     = 0;
	var sizePrize     = 0;
	var toppingsPrize = 0;
	var totalPrice    = 0;
  var itemSelected  = false;

	var item1Topping = ['avocado','broccoli','onions','zucchini','tuna','ham'];
	var item2Topping = ['broccoli','onions','zucchini','lobster','oyster','salmon','bacon','ham'];
	var item3Topping = ['broccoli','onions','zucchini','tuna','bacon','duck','ham','sausage'];
// =====================================================

// Wait until page is ready
document.addEventListener('DOMContentLoaded', function() {
	// Clear total price
	document.getElementById('total').innerHTML = '$0';

	// Clear all item, set medium as default and disable all toppings
  let item = document.getElementsByClassName('item');
  let itemLoop;
  for (itemLoop = 0; itemLoop < item.length; itemLoop++){
    item[itemLoop].checked = false;
  }
  document.getElementById('medium').checked = true;
	// =====================================================

	// Reset all check box
  let allTopping = document.getElementsByClassName('topping');
	let toppingLoop;
	for (toppingLoop = 0; toppingLoop < allTopping.length; toppingLoop++){
    allTopping[toppingLoop].checked = false;
    allTopping[toppingLoop].disabled = true;
	}
  // =====================================================
  
  // Check if Pizza is selected
  let checkItem = document.getElementsByClassName('item');
  let checkItemLoop;
  for(checkItemLoop = 0; checkItemLoop < checkItem.length; checkItemLoop++){
    checkItem[checkItemLoop].onclick = item_checked;
  }
	// =====================================================
  
  // Check if size is selected
  let checkSize = document.getElementsByClassName('size');
  let checkSizeLoop;
  for(checkSizeLoop = 0; checkSizeLoop < checkSize.length; checkSizeLoop++){
    checkSize[checkSizeLoop].onclick = size_checked;
  }
	// =====================================================
  
  // Check if toppings added
  let toppings = document.getElementsByClassName('topping');
  let toppingsCheck;
  for(toppingsCheck = 0; toppingsCheck < toppings.length; toppingsCheck++){
    toppings[toppingsCheck].onclick = toppings_added;
  }
  // =====================================================
});  

// set item price based on item selected
function item_checked(){
  itemSelected = true;
  var toppings = document.getElementsByClassName('topping');
  var toppingLoop;
  var index;
  var arrTop;
  if(this.id == "item-1"){
    arrTop = item1Topping;
    itemPrice = item1Price;
    for(toppingLoop = 0; toppingLoop < toppings.length; toppingLoop++){
      index = toppings[toppingLoop].id;
      act_checkbox(arrTop, index);
    }
  } else if(this.id == "item-2"){
    itemPrice = item2Price;
    arrTop = item2Topping;
    for(toppingLoop = 0; toppingLoop < toppings.length; toppingLoop++){
      index = toppings[toppingLoop].id;
      act_checkbox(arrTop, index);
    }
  } else if(this.id == "item-3"){
    itemPrice = item3Price;
    arrTop = item3Topping;
    for(toppingLoop = 0; toppingLoop < toppings.length; toppingLoop++){
      index = toppings[toppingLoop].id;
      act_checkbox(arrTop, index);
    }   
  }
  toppings_added();
}
function act_checkbox(arrTop, index){
  if(arrTop.indexOf(index) !== -1){
        document.getElementById(index).disabled = false;
      } else {
        document.getElementById(index).checked = false;
        document.getElementById(index).disabled = true;
      }
}
// =====================================================

// set size price
function size_checked(){
  if(this.id == 'small'){
    sizePrize = -1;
  }else if(this.id == 'medium'){
    sizePrize = 0;
  }else if(this.id == 'large'){
    sizePrize = 2;
  }
  toppings_added();
}
// =====================================================

// Toppings added
function toppings_added(){
  let toppings = document.getElementsByClassName('topping');
  let toppingCheckPrice;
  let rawPrice = [];
  for(toppingCheckPrice = 0; toppingCheckPrice < toppings.length; toppingCheckPrice++){
    let isChecked = toppings[toppingCheckPrice].checked;
    if(isChecked){
      rawPrice.push(toppings[toppingCheckPrice].value);
    }
  }
  toppingsPrize = rawPrice.reduce(function(a,b){
      return parseInt(a) + parseInt(b)
    }, 0);
  print_price();
}
// =====================================================

// print out the total price
function print_price(){
  if(itemSelected){
    totalPrice = parseInt(itemPrice) + parseInt(sizePrize) + parseInt(toppingsPrize);
	  document.getElementById('total').innerHTML = '$' + totalPrice;
  } 
}
// =====================================================
	</script>
</body>
</html>