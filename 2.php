<!DOCTYPE html>
<html>
    <head>
    <title>VALIDASI</title>
    </head>
    <body>
        <?php
            function userValidasi($username){
                $smalVal = preg_match('/[a-z]/', $username);
                $angka = preg_match('/[0-9]/', $username);
                $tptVal = strlen($username) == 9;
            
                if ($smalVal && $angka && $tptVal) {
                    echo "Username Valid";
                } else {
                    echo "GAGAL";
                }
            }

            $username = "Xrutaf888";
            userValidasi($username);
            echo "<br>";

            function passValidasi($password){
                $minVal = strlen($password) > 8;
                $kapVal = preg_match('/[A-Z]/', $password);
                $lowVal = preg_match('/[a-z]/', $password);
                $numberr = preg_match('/[0-9]/', $password);
                $specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password);
                
                if ($minVal && $kapVal && $lowVal && $numberr && $specVal) {
                    echo "Password Valid";
                }else{
                    echo "GAGAL JUGA";
                }
            }
        
            $password = "passW0rd=";
            passValidasi($password);
        ?>
    </body>
</html>