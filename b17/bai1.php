<? php
    session_start();
    if(isset($_SESSION["count"]))
        {
            $session["count"]=$_SESSION["count"]+1;
        }
    else{
        $_SESSION["count"]=1;
    }
    echo "Bạn đã truy cập vào trang web này".$_SESSION["count"]. "lần";
?>
