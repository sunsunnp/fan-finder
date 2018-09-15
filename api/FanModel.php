<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'ฝรั่งเศษ',
            "place" => 'ทุ่งหญ้าลาเวนเดอร์',
            'action' => 'ปิ้งกบ',
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        //1-5: เกาหลี
        //6-10: ไทย
        //11-15: วากานด้า
        //16-20: จีน
        //21++: คองโก
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <=5){
        $nationality = 'เกาหลี';
        }
        elseif($name_length <=10){
            $nationality = 'ไทย';
        }
        elseif($name_length <=15){
            $nationality = 'วากานด้า';
        }
        elseif($name_length <=20){
            $nationality = 'จีน';
        }
        else
        $nationality = 'คองโก';
        return $nationality;
    }


    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split
        $date = str_replace("/","",$dob);
        $nums = str_split($date);
        $sum = 0;
        $place = [
            'คูน้ำ',
            'โรงแรม',
            'โรงเรียน',
            'ป่า',
            'สวนสัตว์',
            'สวนสาธารณะ',
            'สวนสนุก',
            'น้ำตก',
            'ทะเล',
            'สวรรค์ชั้น7'
        ];
        foreach($nums as $value)
        {
            $sum = $sum + intval($value);
        }
        $score = $sum % 10;

        for($i = 0;$i<10;$i++){
            if($score == $i){
                return $place[$i];
            }
        }
    }


    public static function getAction($mobileno)
    {
        // TODO
    }
}
