<?php
$domain = $_SERVER["SERVER_NAME"];
if (($domain == "www.88nc.net" ||
   $domain == "88nc.net") )  { 
   Header( "HTTP/1.1 301 Moved Permanently" ); 
   header("location: http://www.88nc.net/88nc/"); 
}

else if (($domain == "www.estheria.my"||
   $domain == "estheria.my") )  {
   Header( "HTTP/1.1 301 Moved Permanently" );    
   header("location: http://www.estheria.my/estheria/"); 
}

else if (($domain == "www.farben.com.my"||
   $domain == "farben.com.my") )  {
   Header( "HTTP/1.1 301 Moved Permanently" );    
   header("location: http://www.farben.com.my/Farben/"); 
}

else if (($domain == "www.acs-solution.com"||
   $domain == "acs-solution.com") )  {
   Header( "HTTP/1.1 301 Moved Permanently" );    
   header("location: http://www.acs-solution.com/acs/"); 
}

else if (($domain == "www.idea-interior.com"||
   $domain == "idea-interior.com") )  {
   Header( "HTTP/1.1 301 Moved Permanently" );    
   header("location: http://www.idea-interior.com/idea/"); 
}

else if (($domain == "www.dve.com.my"||
   $domain == "dev.com.my") )  {
   Header( "HTTP/1.1 301 Moved Permanently" );    
   header("location: http://www.dve.com.my/dve/"); 
}

else if (($domain == "www.essens.com.my" ||
   $domain == "essens.com.my") )  { 
   Header( "HTTP/1.1 301 Moved Permanently" ); 
   header("location: http://www.essens.com.my/essens/"); 
}

?>