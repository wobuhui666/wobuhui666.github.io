$json = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$data = json_decode($json);
$imageUrl = 'https://www.bing.com'.$data->images[0]->url;
echo '<img src="'.$imageUrl.'" alt="Bing Daily Wallpaper">';
