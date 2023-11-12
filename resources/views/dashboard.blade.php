<!-- resources/views/waves.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CSS Waves</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        body {
            margin: 0;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
            color: white;
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 85vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /* Flexbox for containers */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            top: -250px;    
            position : relative;

        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px; /* Fix for safari gap */
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */
        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /* Shrinking for mobile */
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>


<!--LOGO, AUTO --!>
</head>
<body>

<div class="header">

    <!-- Content before waves -->
    <div class="inner-header flex">
        <!-- Just the logo.. Don't mind this -->
        <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283"/>
            <g>
                <path fill="#fff"
                      d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                      C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                      c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7
                      c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2
                      c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8
                      C390.5,326.2,387.1,326.3,383.8,326.3z"/>
            </g>
        </svg>
        <h1>info about website</h1>
    </div>
    <!--form container -->
  <div>
  <!-- Design by foolishdeveloper.com -->
    
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -242px;
    top: 89px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 200px;
    width: 750px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 85px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #333333;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}


input#search-bar{
  margin: 0 auto;
  width: 100%;
  height: 45px;
  padding: 0 20px;
  font-size: 1rem;
  border: 2px solid #f2f2f2;
  outline: none;
  &:focus{
    border: 2px solid #D0CFCE;
    transition: 0.35s ease;
    color: #D0CFCE;
    &::-webkit-input-placeholder{
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &::-moz-placeholder {
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &:-ms-placeholder {
     transition: opacity 0.45s ease; 
  	 opacity: 0;
     }    
   }
 }

.search-icon{
  position: relative;
  float: right;
  width: 30px;
  height: 30px;
  top: -39px;
  right: 10px;
  
}

menu {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap; /* Allow items to wrap in the container */
    gap: 10px; /* Add some space between the buttons */
    width: 100%;
    position: relative; /* Change to relative */
    top: -500%;
    transform: translateY(-50%);
}



menu button {
    transition: all 450ms cubic-bezier(.4,.25,.3,1.3);
    width: 60px;
    height: 60px;
    position: relative; /* Change to relative */
    margin: auto; /* Center within the li */
    display: flex;
    justify-content: center;
    align-items: center;
    color: #23a2f6;
    border: 3px solid #87CEFA;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    background : #F8F8FF;
}

menu button span {
	transition: all 400ms cubic-bezier(.4,.25,.3,1.3) 1ms;
	position: absolute;
	top: 50%;
	left: 50%;
	font-size: 30px;
	font-weight: 900;
	line-height: 55px;
	vertical-align: middle;
}

menu button span:first-of-type {
	font-size: 2.5rem;
	transform: translate(-50%,-50%);
}
		
menu button span:last-of-type {
	transform: translate(-50%,50%);
}

menu button:hover {
	width: 170px;
	border-radius: 10px;
}

.no {
  display: block
}
		
menu button:hover span:first-of-type {transform: translate(-50%,-150%)}
menu button:hover span:last-of-type {transform: translate(-50%,-50%)}

menu button span.offset-1 {margin-top: -1px}
menu button span.offset-3 {margin-top: -3px}
menu button span.offset-10 {margin-top: -10px}

    </style>


</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3></h3>
 
        <label for="u"></label>
        <body>
  <form class="search-container">
    <input type="text" id="search-bar" placeholder="Start Typing Company Name">
    <a href="#"><img class="search-icon" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/70-512.png">
    
    <menu>
    <li class="no">
        <button>
            <span>⭐</span>
            <span>ALL</span>
        </button>
    </li>
    <li class="no">
        <button>
            <span>♻️</span>
            <span>Green</span>
        </button>
    </li>
    <li class="no">
        <button>
            <span>👩🏽</span>
            <span>Women</span>
        </button>
    </li>
    <li class="no">
        <button>
            <span>🗽</span>
            <span>Minority</span>
        </button>
    </li>
    <li class="no">
        <button>
            <span>🏳️‍🌈</span>
            <span>LGBTQIA+</span>
        </button>
    </li>
</menu>
</form>

    
  </form>
</body>
</body>
    </div>
   <!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->
</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends--><!-- resources/views/waves.blade.php -->
