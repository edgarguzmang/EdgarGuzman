<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Codigo SMS</title>
  
  <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/edgar.css') }}">
<script type="text/javascript"  src="{{ asset('js/edg.js') }}"></script>
</head>
<body>
<div class="bgImage"></div>
<svg class="blobCont">
    <image xlink:href="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-0.3.5&s=e20bc3d490c974d9ea190e05c47962f5&auto=format&fit=crop&w=634&q=80" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
    <defs>
        <filter id="gooey" height="130%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        </filter>
    </defs>
    <mask id="mask" x="0" y="0">
        <g style="filter: url(#gooey)">
            <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
            <circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>
            <circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
            <circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
            <circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>
            <circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>
            <circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>
        </g>
    </mask>
</svg>
 
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform">
 
 
      <!-- step 1 -->
      <fieldset>
        <h2 class="h2">Codigo de verificacion</h2>
        <h3 class="h3">Tu codigo de verificacion es </h3>
        <!--<label>Name</label>-->
        <h2 class="h2">{{$longitude}}</h2>
        <h3 class="h3">Ingresalo en tu aplicacion movil.</h3>
        
        
      
 
      </fieldset>
 
    
 
 
</form>
 
       
 
        
        
 
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" type="text/javascript"></script>
<!-- partial -->
  
 
</body>
</html>
