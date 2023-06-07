<?php

 $xml = new SimpleXMLElement("<tipos></tipos>");
 $tipo = $xml->addChild("tipo");
 $tipo->addChild("adosado");
 $xml->asXML("tipos.xml");

?>