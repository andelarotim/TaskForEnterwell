<?php
class Application{
    
    const TABLE_NAME = 'applications';
    public function insertApplication() { 
        
        global $wpdb;  
 
        $data=array(
            'first_name' => $_POST['name'], 
            'last_name' => $_POST['lastname'],
            'address' => $_POST['address'], 
            'house_number' => $_POST['house_number'],
            'place' => $_POST['place'], 
            'zip_code' => $_POST['zip_code'], 
            'state' => $_POST['state'],
            'phone_number' => $_POST['contact'], 
            'email' => $_POST['email'], 
            'bill_number' => $_POST['bill_number'],
            'image' => $_FILES['img']['name'],
        ); 
        
        if($this->doesEmailAreadyExist($_POST['email'])){
            return "Ovaj email vec postoji u bazi podataka.";
        }

        if($this->doesBillNumberAreadyExist($_POST['bill_number'])){
            return "Ovaj broj racuna već postoji.";
        }

        if(!empty($_FILES['img']['name'])){
            $data['image']= time().$_FILES['img']['name'];
            $rowResult = $wpdb->insert(self::TABLE_NAME, $data, $format=null);
            if ($rowResult==1){
                return 'Success';
            }
        }
        else{
            return "Odaberite fotografiju";
        }
        
        return 'Greska';
    }

    private function doesEmailAreadyExist($email){
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM " . self::TABLE_NAME . " WHERE email = '". $email ."'");
        if(empty($results)) {
            return false;
        }
        return true;
    }

    private function doesBillNumberAreadyExist($bill_number){
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM " . self::TABLE_NAME . " WHERE bill_number = '". $bill_number ."'");
        if(empty($results)) {
            return false;
        }
        return true;
    }

    public function imageToUploadFolder($img){
        $post = $_POST;
        $post['img'] = $_FILES['img'];
        $target_path = ABSPATH. 'wp-content/uploads/'. "/" . time(). $post['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $target_path); 
    }
 
}




