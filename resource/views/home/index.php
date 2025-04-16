<?php
pushScript('styles');
?>
<style>
    h1 { color: red;}
</style>
<?php
endPushScript();
section("content");
?>
<h1>content section</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Magni illum voluptate commodi eligendi, deleniti perspiciatis.
</p>
<?php
endsection();
pushScript("scripts");
?>
<script>
    console.log('hello world')
    
</script>
<?php
endPushScript();
extend("layout/app", "content");