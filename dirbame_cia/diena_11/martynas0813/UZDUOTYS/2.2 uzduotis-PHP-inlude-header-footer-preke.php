<!-- Pasiziureti PHP include: -->

pvz: include('header.php');

Susikurti 4 failus:

header.php
main.php
footer.php
index.php

================turetu gautis======

Faile index.php naudojant include('kelias'); f-ja "iterpti" header, main ir footer failus:
index.php
    include('header.php');
    include('main.php');
    include('footer.php');

header.php   faile - turetu buti visas puslapio virsus:
 <html>
     <head>
         ...
     </head>
     <body>

main.php  faile - turetu buti:
<h1> Mano puslapis su PHP</h1>

footer.php faile - turetu buti visa puslapio apacia:
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
