
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - Code Loader</title>
  
  
  
  
      <style>
      html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #4684ee;
}
.loader {
  color: #fff;
  font-family: Consolas, Menlo, Monaco, monospace;
  font-weight: bold;
  font-size: 30vh;
  opacity: 0.8;
}
.loader span {
  display: inline-block;
  -webkit-animation: pulse 0.4s alternate infinite ease-in-out;
          animation: pulse 0.4s alternate infinite ease-in-out;
}
.loader span:nth-child(odd) {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
@-webkit-keyframes pulse {
  to {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    opacity: 0.5;
  }
}
@keyframes pulse {
  to {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    opacity: 0.5;
  }
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >

  <div class="loader">
  <span>{</span><span>}</span>
</div>
  
  
  
  
  

</body>
</html>
 