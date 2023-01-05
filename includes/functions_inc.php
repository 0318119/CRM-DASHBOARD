<?php
set_exception_handler('getKeywordFromPaypal'); // Registers the exception handler
set_exception_handler('getPackageFromPaypal'); // Registers the exception handler


function getCustomerName ($cid,$pid) {
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `id` = $cid ";
    $result = $conn->query($sql);
    
    if ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
        return $row["first_name"].' '.$row["last_name"].'<br>'.$row["email"];
    } else {
        
        $sql = "SELECT * FROM `payment` WHERE `id` = $pid ";
        $result = $conn->query($sql);
        
        if ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
            //$row["first_name"].' '.$row["last_name"];
            return getKeywordFromPaypal ($row["text_var"], 'first_name');
        } else {
            return "Nops!";
        }
        
        //return "N/A";
    }

}

function getKeywordFromPaypal ($json, $keyword) {

    parse_str($json, $args);

    //Convert payment description to utf8
    $args[$keyword] = iconv("windows-1251", "UTF-8", $args[$keyword]);

    $Json = json_encode($args, JSON_UNESCAPED_UNICODE);
    $Json = json_decode($Json);
    //print_r ( $myjson );
    return $Json->$keyword.' '.$Json->last_name.'<br>'.$Json->payer_email ;
}

function getPackageFromPaypal ($pid, $keyword) {
    global $conn;
    $sql = "SELECT * FROM `payment` WHERE `id` = $pid ";
    $result = $conn->query($sql);
    
    if ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
        //$row["first_name"].' '.$row["last_name"];
        parse_str($row["text_var"], $args);

        //Convert payment description to utf8
        if ( isset($args[$keyword]) ) {
            $args[$keyword] = iconv("windows-1251", "UTF-8", $args[$keyword]);
            $Json = json_encode($args, JSON_UNESCAPED_UNICODE);
            $Json = json_decode($Json);
            return $Json->$keyword;
            
        } else {
            if ( isset($args['item_name1']) ) {
            $args['item_name1'] = iconv("windows-1251", "UTF-8", $args['item_name1']);
            $Json = json_encode($args, JSON_UNESCAPED_UNICODE);
            $Json = json_decode($Json);
            return $Json->item_name1;
            } else {
                return "No Package Found!";
            }
            
        }


        
        
        //return getKeywordFromPaypal ($row["text_var"], 'first_name');
    } else {
        return "No Package Found!";
    }

    
}

function getCurrentMSales ($gmonth, $gyear) {
    global $conn;
    $sql = "SELECT SUM(payment_amount) as tsales FROM `payment` WHERE YEAR(`create_at`) = $gyear AND MONTH(`create_at`) = $gmonth";
    $result = $conn->query($sql);
    
    if ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
        return $row["tsales"];
    } else {
        return "N/A";
    }
}

function getLYMSales ($gmonth, $gyear) {
    global $conn;
    $sql = "SELECT SUM(payment_amount) as tsales FROM `payment` WHERE YEAR(`create_at`) = $gyear AND MONTH(`create_at`) = $gmonth";
    $result = $conn->query($sql);
    
    if ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
        return $row["tsales"];
    } else {
        return "N/A";
    }
}