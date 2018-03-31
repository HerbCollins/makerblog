<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/30 0030
 * Time: 21:05
 */

namespace App\Services;


use App\Setting;

class SettingService
{
    public static function set($key , $value)
    {
        if(empty($key))
            throw new \Exception('Setting key empty');

        if(is_array($value))
            $value = json_encode($value);

        $keyfind = Setting::where('key' , $key)->first();
        if(isset($keyfind->id) && $keyfind->id > 0)
        {
            $keyfind->value = $value;
            if($keyfind->save()) return true ;
            return false;
        }else{
            $keyfind = new Setting();
            $keyfind->key = $key;
            $keyfind->value = $value;
            if($keyfind->save()) return true;

            return false;
        }
    }

    public static function get($key)
    {
        $keyfind = Setting::where('key' , $key)->first();

        if(isset($keyfind->id) && $keyfind->id > 0){
            return is_array($value = json_decode($keyfind->value , true)) ? $value : $keyfind->value;
        }else{
            return null;
        }
    }
}