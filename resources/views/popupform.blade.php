<head>
<style>
#cta {
	display: block;
	position: relative;
	top: 40vh;
	margin: 0 auto;
	padding: 20px 40px;
	border: 0;
	background: hsl(200,85%,60%);
	color: white;
}

form {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	width: 100%;
	margin: 0 auto;
	text-align: center;
	box-sizing: border-box;
	background: hsl(200,70%,90%);
	box-shadow: 0 5px 20px rgba(0,0,0,0.4);
	padding: 20px 50px;
	border: 20vw solid rgba(0,0,0,0.5);
	border-bottom: 80vh solid rgba(0,0,0,0.52);
	transition: 0.2s ease;
	z-index: -1;
	opacity: 0;
} body.form-active form {
	opacity: 1;
	z-index: 10;
}

input[type="text"], textarea, input[type="submit"] {
	display: block;
	box-sizing: border-box;
	border: 0;
	margin: 10px 0;
	padding: 20px 40px;
	text-align: center;
	background: hsl(0,0%,98%);
	width: 100%;
	color: hsl(200, 85%, 20%);
}

.pay, .cancel {
	border: 0;
	padding: 15px 20px;
	text-transform: uppercase;
	display: inline-block;
	margin: 10px;
	color: white;
} .pay {
	width: 40%;
	background: hsl(200, 95%, 60%);
} .cancel {
	width: 30%;
	background: hsl(0, 85%, 70%);
}
</style>
</head>
<form action="#">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="contact" placeholder="Contact Info">
	<textarea name="notes" placeholder="Notes"></textarea>
	<button class="cancel" onclick="toggleForm();">Cancel</button>
	<button class="pay" onclick="toggleForm();">Pay</button>
</form>
<script>
var body = document.getElementsByTagName('body')[0];

function toggleForm() {
	body.classList.toggle('form-active');
}
</script>
