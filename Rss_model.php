
<?php
//Rss_model.php
class Rss_model extends CI_Model {

    
    public function get_rss($slug = FALSE)
{
        if ($slug === FALSE)
        {
  $request = "https://news.google.com/news??hl=en&gl=us&tbm=nws&authuser=0&q=florida+gators+football&output=rss"; 
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  return $xml;
        }
        
        $request= $url;
	$response= file_get_contents($request);
	$xml = simplexml_load_string($response);
	return $xml;
	
	
	}//end get_rss()
	
}//end Rss_model