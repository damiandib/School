<?php
function menu($url)
{
    include $url;
    $count = count($data);
    #echo $count;
    #will make sure that the columns are the right size
    $col = 4;
    if ($count == 3) {
        $col = 4;
    } elseif ($count == 2){
        $col = 5;
    } else {
        $col = 3;
    }
    # $i in this case is our array number and counts up with every loop through an array
    for ($i = 0; $i < $count; $i++) {
        echo '
            <div class="col-sm-12 col-md-' . $col . ' margin-top-sm">
                <div class="img-relative text-white">
                    <a href="' . $data[$i][0] . '">
                        <img class="img-fluid" src="' . $data[$i][1] . '">
                        <div class="centered h1">' . $data[$i][2] . '</div>
                    </a>
                </div>
            </div>
    ';
    }
}
?>

