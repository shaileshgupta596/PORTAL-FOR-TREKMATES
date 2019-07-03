<!DOCTYPE html>
<html>
<body>



<script>

loadXMLDoc();

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName("member");
  console.log(x);

   for (i = 0; i <x.length; i++) {
    out = "<div style='border:1px solid;'>"

    name = "<div style='margin-top:10px;'> Name:" +x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +"</div>"
    roll = "<div style='margin-top:10px;'> Roll : " +x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue+"</div>"
    designation = "<div style='margin-top:10px;'> Designation : " +x[i].getElementsByTagName("designation")[0].childNodes[0].nodeValue+"</div>"
    description = "<div style='margin-top:10px;'> Description : " +x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue+"</div>"
    out  = out +name+ roll+designation+description+"</div>"
    document.write(out);
   }
  
  
}
</script>

</body>
</html>
