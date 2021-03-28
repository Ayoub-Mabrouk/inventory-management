<?php
require_once 'config.php';
$sql = "SELECT id_product,Barcode,P_name,Quantity,Brand,Price,image_url,F_name FROM products,users where products.id_user=users.id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<div class=\"data\">";


    
    echo "<p class=\"id\">" . $row['id_product'] . "</p>";
    echo " <p class=\"barcode\">" . $row['Barcode'] . "</p>";
    echo "<p class=\"name\">" . $row['P_name'] . "</p>";
    echo "<p class=\"quantity\">" . $row['Quantity'] . "</p>";
    echo " <p class=\"brand\">" . $row['Brand'] . "</p>";
    echo "<p class=\"price\">" . $row['Price'] . "$</p>";
    echo "<p class=\"owner\">" . $row['F_name'] . "</p>";
    echo "<p class=\"imgsrc\">".$row['image_url']."</p>";
    echo ' <div class="edit-delete">
        <svg class="edit_button" xmlns="http://www.w3.org/2000/svg" width="30.302" height="26.93" viewBox="0 0 30.302 26.93">
            <path id="Icon_awesome-edit" data-name="Icon awesome-edit" d="M21.18,4.379l4.745,4.745a.514.514,0,0,1,0,.726l-11.49,11.49-4.882.542A1.023,1.023,0,0,1,8.422,20.75l.542-4.882,11.49-11.49A.514.514,0,0,1,21.18,4.379Zm8.522-1.2L27.135.607a2.058,2.058,0,0,0-2.9,0L22.369,2.469a.514.514,0,0,0,0,.726L27.114,7.94a.514.514,0,0,0,.726,0L29.7,6.078A2.058,2.058,0,0,0,29.7,3.174ZM20.2,18.215V23.57H3.367V6.736H15.456a.647.647,0,0,0,.447-.184l2.1-2.1a.631.631,0,0,0-.447-1.078H2.525A2.526,2.526,0,0,0,0,5.894V24.412a2.526,2.526,0,0,0,2.525,2.525H21.043a2.526,2.526,0,0,0,2.525-2.525v-8.3a.632.632,0,0,0-1.078-.447l-2.1,2.1A.647.647,0,0,0,20.2,18.215Z" transform="translate(0 -0.007)" fill="#9b9b9b" />
        </svg>
        <svg class="delete" xmlns="http://www.w3.org/2000/svg" width="20.945" height="26.93" viewBox="0 0 20.945 26.93">
            <path id="Icon_material-delete-forever" data-name="Icon material-delete-forever" d="M9,28.438a3,3,0,0,0,2.992,2.992H23.957a3,3,0,0,0,2.992-2.992V10.484H9Zm3.68-10.652,2.11-2.11,3.187,3.172,3.172-3.172,2.11,2.11-3.172,3.172,3.172,3.172-2.11,2.11-3.172-3.172L14.8,26.238l-2.11-2.11,3.172-3.172ZM23.209,6l-1.5-1.5H14.232L12.736,6H7.5V8.988H28.445V6Z" transform="translate(-7.5 -4.5)" fill="#9b9b9b" />
        </svg>
    </div></div>';
}
