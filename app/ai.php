<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        // if(strpos($text, "ครับ") != false){
        //     return 'Mals';
        // }
        // return 'Feemals';
        // $word = ["ค่ะ","ค่า"];
        $pos = strrpos($text, "ค่ะ");
        //$pos1 = strrpos($text, "ครับ");
        if ($pos === false) { 
            return 'Male';
        }else{
            return 'Female';
        }
        //else if ($pos1 === false) { 
            return 'Unknown';
        //}
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        $pos = strrpos($text, "น่ารัก");
        if ($pos === false){
            return 'Negative';
        }else{
            return 'Positive';
        }
        return 'Neutral';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $myarray = array('เหี้ย','สัส');
        $a = array_search($text,$myarray);
        if(in_array($text, $myarray)){
            return ["สัส",$a];
         }else{
            return ["น่ารัก"];
         } 
        // $max = sizeof($myarray);
        // for($i = 0; $i <= $max;$i++){
        //     if(strrpos($text, $myarray[$i]) == true){
        //         return ["สัส"];
        //         break;
        //     }else{
        //         return ["น่ารัก"];
        //         break;
        //     }
        // }
        // foreach($myarray as $a){
        //     if(strrpos($text, $a) !== false){
        //         return ["สัส"];
        //     }else
        //     if(strrpos($text, $a) == false){
        //         return ["น่ารัก"];
        //     }
        // }
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        if(preg_match('/^[a-zA-Z]+$/i',$text)){
            return ['EN'];
         }



         
        return ['TH'];
    }
}
