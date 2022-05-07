<?php
 $data_name = array(
                'isActive' =>"true",
                'Admob_native' =>"ca-app-pub-3940256099942544/2247696110",
                'Admob_Interstitial' => "ca-app-pub-3940256099942544/1033173712",
                'Admob_Banner' => "ca-app-pub-3940256099942544/6300978111",
                'Admob_OpenAd' =>"ca-app-pub-3940256099942544/3419835294",
                'is_screen_show' => "true",
                'isBackIns' => "true",
                'is_exit_screen_ad_show' =>"true",
                'is_first_screen_show' => "false",
                'is_second_screen_show' =>"false",
                'is_InterstitialShow' =>"true",
                'is_NativeShow' =>"true",
                'ins_Counter' => "2",
                'isReviewDailog' => "false",
                'Privacy' => "https://ankur-starsoup.blogspot.com/2022/01/gb-whats-version-2022.html",
                'new_app_url'=>"https://play.google.com/store/apps/details?id=com.version.gbwhats.gbwhatsapp.gblatestversion",
                'show_app_new_dialog'=>"false"
                );
     $return_arr['msg']='Thank You';
     $return_arr['Status Code']='200';
     $return_arr['data']= $data_name;
     echo json_encode($return_arr); 
?>