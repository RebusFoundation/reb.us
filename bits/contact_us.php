<?php
/*
  Contact Us section
*/
?>
<div class="section">
  <h3>Get In Touch</h3>
 <div class="expanded row">
    <div class="medium-6 columns">
      <form id="tinyletter" style="padding:0 20px 0 0; margin-right:20px;" action="https://tinyletter.com/rebusopentextbooks" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/rebusopentextbooks', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
        <p><label for="tlemail">Enter your email address to sign up to our Newsletter:</label></p>
        <p>
          <input type="text" name="email" id="tlemail" />
          <input type="hidden" value="1" name="embed"/>
          <input type="submit" value="Subscribe" />
        </p>
        <!--p><a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a></p-->
      </form>
    </div>
    <div class="medium-6 columns">
      <p>
        <a class="badger" href="https://twitter.com/rebus_ot/" title="Rebus Open Textbooks on Twitter"><img src="/img/badges/twitter.png" alt="Twitter"></a>
        <a class="badger" href="https://medium.com/rebus-open-textbooks/" title="Rebus Open Textbooks on Medium"><img src="/img/badges/medium.png" alt="Medium"></a>
        <a class="badger" href="https://github.com/RebusOpenTextbooks" title="Rebus Open Textbooks on GitHub"><img src="/img/badges/github.png" alt="GitHub"></a>
        <a class="badger" href="https://www.facebook.com/RebusOpenTextbooks/" title=""><img src="/img/badges/facebook.png" alt="Rebus Open Textbooks on Facebook"></a>
      </p>
      <p><strong><a href="mailto:opentextbooks@reb.us?subject=Hi!">opentextbooks@reb.us</a></strong></p>
    </div>
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73332707-1', 'auto');
  ga('send', 'pageview');

</script>