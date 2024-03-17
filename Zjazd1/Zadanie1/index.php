<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <?php 
        $table[0] = "jabłko";
        $table[1] = "banan";
        $table[2] = "pomarańcza";
        function mb_strrev($str){
            $r = '';
            for ($i = mb_strlen($str); $i>=0; $i--) {
                $r .= mb_substr($str, $i, 1);
            }
            return $r;
        }
        function FirstP($str)
        {
            $r = mb_substr($str,0,1);
            if ($r == "p")
            {
                return "Zaczyna się literą 'p'";
            }
            else{
                return "Nie zaczyna się literą 'p'";
            }
        }
        foreach ($table as $a)
        {
            echo mb_strrev("$a")."<br>";
            echo FirstP($a)."<br>";
        }

        ?>
    </body>
</html>
