<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php
       
        $currentAnswer = $_POST['answer'] ?? null;

        $data = file("vote.txt");
        if ($currentAnswer !== null) {
                $byff=explode("-", $data[$currentAnswer + 1]);
                $byff[1]+=1;
                $byff[1].="\n";
                $data[$currentAnswer + 1]=implode(" - ", $byff);
                file_put_contents("vote.txt", implode("", $data));

        }


        $question = $data[0];
        unset($data[0]);

        $answers = [];
        foreach ($data as $value) {
                $answers[] = explode(" - ", $value);
        }
        ?>

        <form action="vote.php" method="POST">
                <?= $question ?>
                <br>
                <?php
                foreach ($answers as $key=> $value) {
                        echo "<input type ='radio' value ='$key' name ='answer'> $value <br>\n ";
                }
                ?>
                <input type="submit" value="OK">
        </form>
</body>

</html>