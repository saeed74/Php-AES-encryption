<?php 

class Functions {


    function savePurchaseLog($getway, $log_data, $purchase_id){

        $f_log_data = $getway . " : " . $log_data;

        $loged = db::insert('purchases_log',[
            'purchase_id' => $purchase_id,
            'data' => $f_log_data
        ],false );

    }


        
    function getErrorReasonForZarinPal($int) { //acording to zarinpal php document

        switch($int){
            case -1:
                return "اطلاعات ارسال شده ناقص است";
            break;
            case -2:
                return "آی پی و یا مرچنت کد پذیرنده اشتباه است";
            break;
            case -3:
                return "مبلغ باید بالای 100 تومان باشد";
            break;
            case -4:
                return "سطح تایید پذیرنده در زرین پال پایین تر از سطح نقره‌ای است";
            break;
            case -11:
                return "درخواست مورد نظر یافت نشد";
            break;
            case -21:
                return "هیچ نوع عملیاتی برای این تراکنش یافت نشد";
            break;
            case -22:
                return "تراکنش ناموفق می‌باشد";
            break;
            case -33:
                return "رقم تراکنش با رقم پرداخت شده مطابقت ندارد";
            break;
            case -54:
                return "درخواست مورد نظر آرشیو شده است";
            break;
            case 101:
                return "عملیات پرداخت موفق بود اما درخواست وریفای پیمنت بروی این تراکنش قبلا انجام شده است";
            break;
        }

        return "علت خطا نامشخص، کد : ".$int;

    }




}

?>