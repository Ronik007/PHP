<?php

$comp = filter_input(INPUT_POST,"Stock_Name");
$qrt = filter_input(INPUT_POST,"quarter");
$c_inc = filter_input(INPUT_POST,"cur_income");
$p_inc = filter_input(INPUT_POST,"prv_income");
$c_pat = filter_input(INPUT_POST,"cur_pat");
$p_pat = filter_input(INPUT_POST,"prv_pat");

echo "<h2>Today's Results : </h2></br>";
echo "<h3><b>$comp : </b></h3>";

if( $c_pat>0 && $p_pat>0){
    if ( $c_pat>$p_pat && $c_inc>$p_inc ) {
        echo "---> The company reported higher profit at Rs $c_pat crore in $qrt FY21 against Rs $p_pat crore in $qrt FY20 , revenue rose to Rs $c_inc crore from $p_inc crore YoY.";
    }elseif ( $c_pat>$p_pat && $c_inc<$p_inc ) {
        echo "---> The company reported higher profit at Rs $c_pat crore in $qrt FY21 against Rs $p_pat crore in $qrt FY20 , revenue decline to Rs $c_inc crore from $p_inc crore YoY.";
    }elseif ( $c_pat<$p_pat && $c_inc>$p_inc ) {
        echo "---> The company reported lower profit at Rs $c_pat crore in $qrt FY21 against Rs $p_pat crore in $qrt FY20 , revenue rose to Rs $c_inc crore from $p_inc crore YoY.";
    } else {
        echo "---> The company reported lower profit at Rs $c_pat crore in $qrt FY21 against Rs $p_pat crore in $qrt FY20 , revenue decline to Rs $c_inc crore from $p_inc crore YoY.";
    }

    
}elseif( $c_pat<0 && $p_pat>0){
    if( $c_inc > $p_inc ){
        echo "---> The company reported loss of Rs $c_pat crore in $qrt FY21 against Rs $p_pat crore in $qrt FY20 , revenue rose to Rs $c_inc crore from $p_inc crore YoY.";
    } else {
        echo "---> The company reported loss of Rs $c_pat crore in $qrt FY21 against $p_pat crore in $qrt FY20 , revenue decline to Rs $c_inc crore from $p_inc crore YoY.";
    }

}elseif( $c_pat>0 && $p_pat<0){
    if( $c_inc > $p_inc ){
        echo "---> The company reported profit at Rs $c_pat crore in $qrt FY21 against loss of Rs $p_pat crore in $qrt FY20 , revenue rose to Rs $c_inc crore from $p_inc crore YoY.";
    } else {
        echo "---> The company reported profit at Rs $c_pat crore in $qrt FY21 against loss of Rs $p_pat crore in $qrt FY20 , revenue decline to Rs $c_inc crore from $p_inc crore YoY.";
    }    

    
}else {
    if( $c_inc > $p_inc ){
        echo "---> The company reported loss Rs $c_pat crore in $qrt FY21 against loss of Rs $p_pat crore in $qrt FY20 , revenue rose to Rs $c_inc crore from $p_inc crore YoY.";
    } else {
        echo "---> The company reported loss Rs $c_pat crore in $qrt FY21 against loss of Rs $p_pat crore in $qrt FY20 , revenue decline to Rs $c_inc crore from $p_inc crore YoY.";
    }
}
?>