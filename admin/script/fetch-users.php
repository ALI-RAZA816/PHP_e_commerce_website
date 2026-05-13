<?php 
    
    include "config.php";
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0){
        $output .="<table class='table m-0'>
                    <thead>
                        <tr class='align-middle'>
                            <th class='col-4 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>User</th>
                            <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Role</th>
                            <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Status</th>
                            <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Joined</th>
                            <th class='col-2 text-uppercase bg-secondary-subtle text-secondary' style='font-size:15px;'>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while($row=mysqli_fetch_assoc($result)){
                        
                        $initial = substr($row['name'], 0,1);
                      
                        $output .=" <tr class='align-middle'>
                                        <td>
                                            <div class='d-flex'>
                                                <div style='height:45px;width:45px;border-radius:100%;text-align:center;line-height:45px;' class='border me-3 text-muted text-uppercase fw-bold'>{$initial}</div>
                                                <div>
                                                    <p class='text-capitalize m-0 fw-bold'>{$row['name']}</p>
                                                        <p class='m-0 text-muted fw-normal'>{$row['email']}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class='text-capitalize text-primary'>{$row['user_role']}</td>
                                            <td class='text-capitalize text-success'>{$row['status']}</td>
                                            <td>{$row['join_date']}</td>
                                            <td>
                                                <a href='edit-user-page.php' class='text-decoration-none text-muted'><i class='fa-solid fa-edit text-muted'></i></a>
                                                <i style= 'cursor:pointer;'class='fa-solid fa-trash text-danger'
                                                data-delete-user={$row['id']} id='delete-user-button'></i>
                                            </td>
                                    </tr>";
                    }
            $output .= "</tbody>
                </table>";
    }

    echo $output;

?>