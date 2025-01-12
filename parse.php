$myfile = fopen("beer.json.csv", "r") or die("Unable to open file!");
$booze = fread($myfile,filesize("beer.json.csv"));
fclose($myfile);

$csv = collect(explode("\r\n", $booze));
$csv->each(function($string) {
    try {
        $a = new Alcohol();
        $alcCsv = explode(",", $string);
        $a->title = $alcCsv[0];
        $a->brand = $alcCsv[1];
        $a->category = $alcCsv[2];
        $a->subcategory = $alcCsv[3];
        $a->price = $alcCsv[4];
        $a->volume = $alcCsv[5];
        $a->alcohol_content = $alcCsv[6];
        $a->country = $alcCsv[7];
        // $a->url = $alcCsv[8];
        echo $a."\n";
    } catch (Exception $e) {}
});
