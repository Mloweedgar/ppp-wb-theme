<?php get_header(); ?>
<section>
    <div class="bluish-text-color greysh-background">
    <h2 id="faq_title">Faqs</h2>
</div>
<div class="faqs">
    <h4 class="accordion-faq">What is PPP?</h4>
    <div class="panel_faq">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
    <h4 class="accordion-faq">What is the role of PPPD and that of the ZIPA</h4>
    <div class="panel_faq">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr> 
    <h4 class="accordion-faq">What are the roles of Private sectors and Public sectors in the PPP Project?</h4>
    <div class="panel_faq">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
    <h4 class="accordion-faq"> What are the underlined procedures for Unsolicited Project Proposal?</h4>
    <div class="panel_faq">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>    
    <hr>
    <h4 class="accordion-faq">Does the PPP procurement aligned with the traditional procurement procedures?</h4>
    <div class="panel_faq">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
    <h4 class="accordion-faq">Who procure the transaction advisor for PPP projects?</h4>
    <div class="panel_faq">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
    <h4 class="accordion-faq">When is the Transaction Advisor hired for PPP</h4>
    <div class="panel_faq">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
</div>
</section>
<script>
var acc = document.getElementsByClassName("accordion-faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel_faq = this.nextElementSibling;
    if (panel_faq.style.maxHeight) {
      panel_faq.style.maxHeight = null;
    } else {
      panel_faq.style.maxHeight = panel_faq.scrollHeight + "px";
    } 
  });
}
</script>
<?php get_footer(); ?>