<?php
class ApplicationsEntry{
    
    const TABLE_NAME = 'applications';
    public function getAllApplications() { 
        
        global $wpdb;
        $results = $wpdb->get_results( "SELECT * FROM " . self::TABLE_NAME . " ORDER BY id DESC" );
        return $results;  
    }
}

    $app_enteries = new ApplicationsEntry();
    $results= $app_enteries->getAllApplications();
?>

<h2> List of Enterwell Applications </h2>
<div style="overflow-x:auto;">
    <table class="table_style" cellspacing="0"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Adresa</th>
                <th>Kućni broj</th>
                <th>Mjesto</th>
                <th>Poštanski broj</th>
                <th>Država</th>
                <th>Kontakt telefon</th>
                <th>Email</th>
                <th>Broj računa</th>
                <th>Fotografija</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ((array)$results as $result) {
                $id = $result->id;
                $name = $result->first_name;
                $last_name = $result->last_name;
                $address = $result->address;
                $house_number = $result->house_number;
                $place = $result->place;
                $zip_code = $result->zip_code;
                $state = $result->state;
                $contact = $result->phone_number;
                $email = $result->email;
                $bill_number = $result->bill_number;
                $image = $result->image;
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $last_name; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $house_number; ?></td>
                <td><?php echo $place; ?></td>
                <td><?php echo $zip_code; ?></td>
                <td><?php echo $state; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $bill_number; ?></td>
                <td><?php echo "<embed src='/Enterwell/wp-content/uploads/" . $image . "' alt='' style='width:100%; height: auto%;'";?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>