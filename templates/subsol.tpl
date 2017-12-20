{*Smarty*}
{*Acesta reprezinta fisierul smarty folosit la subsolul TUTUROR paginilor mele*}

<SCRIPT type="text/javascript">

var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}


function w3_close() {
    mySidebar.style.display = "none";
}


function w3_suportTehnic() {
    alert("Functia nu este implementata inca");
}
</SCRIPT>
<footer class="w3-center w3-black w3-padding-64">
  <a href="#acasa" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Duceti-va SUS</a>
  <div class="w3-large w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>
<a href="../pagini/feedbackFormular.html" title="Send feedback" class="w3-hover-text-green">Feedback la acest site</a> | <a href="https://www.ftgi.com/servicii/servicii.php" title="Our services" class="w3-hover-text-green">Servicii</a> | 
<a href="../pagini/disclaimer.html" title="Disclaimer" target="_blank" class="w3-hover-text-green">Disclaimer</a></p><BR>
Copyright &copy; {$smarty.now|date_format:"%Y"} Suta Viorel-Florian. All rights reserved.
</footer>
</BODY>
</HTML>

