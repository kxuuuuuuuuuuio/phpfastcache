Phpfastcache\Helper\Psr16Adapter;
\InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client()
'7wo6q' 
ew Psr16Adapter('Files'));
$instagram->login();
$account = $instagram->getAccountById(3);
echo $account->getUsername();
