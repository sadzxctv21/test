

<table> 
    
    <tr> 
        <td width="60%">
        <form method="post">
            <input type="text" name="msg">
            <input type="submit" name="test" id="test" value="RUN" /><br/>
        </form>
        </td width="40%">
		
		<td>
		    <img  id="image" src="temp.png" onload="refreshIt(this)" width="100%">
            </meta>
		</td>
    </tr> 
	
</table> 


<script language="JavaScript">
            function refreshIt(element) {
                setTimeout(function() {
                    element.src = element.src.split('?')[0] + '?' + new Date().getTime();
                    refreshIt(element);
                }, 2000); // refresh every 50ms
            }
</script>

<?php

function testfun()
{
   echo "您送出的訊息為：". $_POST['msg'];
   
}

if(array_key_exists('test',$_POST)){
   testfun();
}
?>
