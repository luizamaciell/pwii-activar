<?php
   $this->layout("_theme");
?>

<?php
   if(!empty($faqs)){
       //var_dump($faqs);
       foreach ($faqs as $faq){
           //var_dump($faq);
           echo "<div>{$faq->question} - {$faq->answer}</div>";
       }
   }
?>

    <!-- faqs -->
    <div class="container">
         <h1>Frequently Asked Questions</h1>
        <details>
        <summary>How do I create accordion?</summary>
     <div>
    The tags <em>details</em> and <em>summary</em> have you covered.
     </div>
    </details>
</div>
<!--faqs end-->
