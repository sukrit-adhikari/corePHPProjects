function ptts()
{

if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttpptts=new XMLHttpRequest();
  
     }
						else{// code for IE6, IE5
						  										xmlhttpptts=new ActiveXObject("Microsoft.XMLHTTP");
  							}
  						
xmlhttpptts.onreadystatechange=function()

{


  if (xmlhttpptts.readyState==4 && xmlhttpptts.status==200)
    {
    	ptts_c_count++;

			response=xmlhttpptts.responseText;
			//alert(xmlhttp.responseText);				
			
				if(response.indexOf('#%#^%$^nottyping#%#^%$^')==-1){
					document.getElementById("typing").innerHTML="<font color=WHITE> and typing...</font>";
					//document.chatplaceform.chatplace.scrollIntoView(true);
				}
				else{
					document.getElementById("typing").innerHTML="";				
				}
    }
}

xmlhttpptts.open("GET","ajax/ptts.php",true);
xmlhttpptts.send();

}
