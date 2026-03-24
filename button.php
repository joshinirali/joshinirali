<html>
<button onclick="data()">click</button>
<div id="result"></div> 
<script>
function data(){
	const xhttp=new xMLHttprequest();
	xhttp.onload=function(){
		document.getElementById("result").innerhtml=this.responsetext;
	}
	xhttp.open("GET","http://localhost:81/niralisem2/button2.php",true);
	xhttp.send()
</script>	
</html>