<?php
class Net
{
    private $net_stamp;

    public function NetSet()
    {
        if ($net_stamp = $this->SetNet()) {
            $this->net_stamp = $net_stamp;
            return $net_stamp;
        } else {
            return false;
        }
    }

    private function SetNet()
    {
        $Nux = '1234567890';
        $_s_s_Nu = str_shuffle($Nux);

        $BL = 'ABCDEFGHIJKLMNOPRSTUWYVQZ';
        $_s_s_BL = str_shuffle($BL);

        $SL = 'abcdefghijklmnoprstuwyvqz';
        $_s_s_SL = str_shuffle($SL);

        $Sy = '!|_&?,."*%#@=+-';
        $_s_s_Sy = str_shuffle($Sy);

        $_GET_ALL = $_s_s_Nu . $_s_s_BL . $_s_s_SL . $_s_s_Sy;
        $_STRLEN = strlen($_GET_ALL);
        $_MIX_ALL = str_shuffle($_GET_ALL);
        for ($N = 1; $N <= $_STRLEN; $N++) {
            $_MIX_ALL = str_shuffle($_MIX_ALL);
        }
        $_SIEC = substr($_MIX_ALL, 0, 85);
        $net_stamp = $_SIEC;
        return $net_stamp;
    }
}
?>
