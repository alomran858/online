<?php
error_reporting(0);

class Query_model extends CI_Model {
public function __construct(){
  $this->load->database() ;

    }




public function enter($data){
    $this->load->helper('url');


    $query_data =array(
       'content'=>$data['content'] ,

        'user_id'=>$data['user_id'],

        'status'=>0

     );
           $this->db->insert('query',$query_data);



                   $this->db->select("query_id");
                   $this->db->where('user_id', $data['user_id']);
                    $this->db->where('content', $data['content']);
                     $this->db->from('query');

                     $result = $this->db->get();
                    $query_id=  $result->row()->query_id;
                     $duration_data =array(
                        'query_id'=>$query_id ,

                         'start_time'=>$data['start_time'],

                         'end_time'=>$data['end_time']

                      );

                         $this->db->insert('duration',$duration_data);


    }



    public function retrieve($id){
        $this->load->helper('url');

        $this->db->select("query_id,content,status");
        $this->db->where('user_id', $id);
          $this->db->from('query');

          $query = $this->db->get();
            return $query->result();



        }






            public function select($id){
                $this->load->helper('url');

                $this->db->select("query_id,content,status");
                $this->db->where('query_id', $id);
                  $this->db->from('query');

                  $query = $this->db->get();
                    return $query->result();



                }


                public function getDataFromOffline($id){
                    $this->load->helper('url');


              $CI = &get_instance();
              $this->db2 = $CI->load->database('offline', TRUE);

                    //cites



                                       $this->db2->select("parent_id");
                                       $this->db2->where('english','Riyadh');

                                         $this->db2->from('cities');

                                         $result = $this->db2->get();
                                        $riyadh_id=  $result->row()->parent_id;


                                        $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                        $this->db2->where('state_id',$riyadh_id);
                                          $this->db2->where('query_id',$id);
                                          $this->db2->from('result');

                                          $result = $this->db2->get();

if ($result->row() !=null){

                                        $data['riyadh_number_of_tweet']=  $result->row()->number_of_tweet ;

                                        $data['riyadh_numer_of_user']= $result->row()->numer_of_user ;

                                        $data['riyadh_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                        $data['riyadh_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                        $data['riyadh_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                        $data['riyadh_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //eastren side

                                                                                 $this->db2->select("parent_id");
                                                                                 $this->db2->where('english','Sarqiyah');

                                                                                   $this->db2->from('cities');

                                                                                   $result = $this->db2->get();
                                                                                  $Sarqiyah_id=  $result->row()->parent_id;

                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Sarqiyah_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Sarqiyah_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Sarqiyah_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Sarqiyah_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Sarqiyah_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Sarqiyah_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Sarqiyah_negative_emotion_wight']= $result->row()->negative_emotion_wight ;
                                          //Dammam

                                        //  $this->db2->select("parent_id");
										$this->db2->select("parent_id");
                                          $this->db2->where('english','Dammam');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Dammam_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Dammam_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Dammam_number_of_tweet']=  $result->row()->number_of_tweet ;


                                          $data['Dammam_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Dammam_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Dammam_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Dammam_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Dammam_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Qasim

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Qasim');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Qasim_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Qasim_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Qasim_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Qasim_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Qasim_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Qasim_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Qasim_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Qasim_negative_emotion_wight']= $result->row()->negative_emotion_wight ;


                                          //hail
                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','hail');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $hail_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$hail_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['hail_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['hail_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['hail_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['hail_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['hail_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['hail_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Sakakah
                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Hudud-Samaliyah');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Hudud_Samaliyah_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Hudud_Samaliyah_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Hudud_Samaliyah_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Hudud_Samaliyah_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Hudud_Samaliyah_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Hudud_Samaliyah_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Hudud_Samaliyah_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Hudud_Samaliyah_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Tabuk
                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Tabuk');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Tabuk_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Tabuk_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Tabuk_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Tabuk_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Tabuk_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Tabuk_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Tabuk_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Tabuk_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Madinah

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Madinah');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Madinah_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Madinah_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Madinah_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Madinah_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Madinah_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Madinah_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Madinah_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Madinah_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Mecca

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Mecca');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Mecca_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Mecca_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Mecca_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Mecca_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Mecca_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Mecca_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Mecca_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Mecca_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          // Bahah

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Bahah');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Bahah_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Bahah_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Bahah_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Bahah_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Bahah_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Bahah_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Bahah_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Bahah_negative_emotion_wight']= $result->row()->negative_emotion_wight ;


                                          //Abha

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Abha');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Abha_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Abha_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Abha_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Abha_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Abha_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Abha_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Abha_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Abha_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Jizan

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Jizan');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Jizan_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Jizan_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Jizan_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Jizan_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Jizan_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Jizan_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Jizan_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Jizan_negative_emotion_wight']= $result->row()->negative_emotion_wight ;

                                          //Najran

                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','Najran');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $Najran_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$Najran_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['Najran_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['Najran_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['Najran_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['Najran_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['Najran_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['Najran_negative_emotion_wight']= $result->row()->negative_emotion_wight ;



                                          //unlocated
                                          $this->db2->select("parent_id");
                                          $this->db2->where('english','unlocated');

                                            $this->db2->from('cities');

                                            $result = $this->db2->get();
                                           $unlocated_id=  $result->row()->parent_id;



                                          $this->db2->select("number_of_tweet,numer_of_user,number_of_positive_emotion,number_of_negative_emotion,	Positive_Emotion_Wight,negative_emotion_wight");
                                          $this->db2->where('state_id',$unlocated_id);
                                            $this->db2->where('query_id',$id);
                                            $this->db2->from('result');

                                            $result = $this->db2->get();


                                          $data['unlocated_number_of_tweet']=  $result->row()->number_of_tweet ;

                                          $data['unlocated_numer_of_user']= $result->row()->numer_of_user ;

                                          $data['unlocated_number_of_positive_emotion']= $result->row()->number_of_positive_emotion ;
                                          $data['unlocated_number_of_negative_emotion']= $result->row()->number_of_negative_emotion ;
                                          $data['unlocated_Positive_Emotion_Wight']= $result->row()->Positive_Emotion_Wight ;
                                          $data['unlocated_negative_emotion_wight']= $result->row()->negative_emotion_wight ;



                                          return $data ;


}


return ;







                    }




}







?>
