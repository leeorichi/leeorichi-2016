
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <!-- IE compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Im Freelancer,Iam Developer">
    <meta name="author" content="leeorichi">
  <title>Leeorichi - Checking Version Update</title>
  <!-- Favicons Links -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/logos/llogo.png">
  <link rel="icon" type="image/png" href="/img/logos/llogo.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/img/logos/llogo.png" sizes="16x16">
  <link rel="manifest" href="/img/favicons/manifest.json">
  <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#f7465b">
  <link rel="shortcut icon" href="/img/logos/llogo.png">
  <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#0cd563">
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
    <span>{</span> Checking Update...<span>}</span>
  </div>
</body>
</html>
