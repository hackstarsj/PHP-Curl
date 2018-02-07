    <?php
    $url="https://jsonplaceholder.typicode.com/posts";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    $html=curl_exec($ch);
    echo $html;
    ?>
