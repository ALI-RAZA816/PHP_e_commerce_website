<?php 
    
    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

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
                            $bgcolor='';
                            $color='';
                            $role_bg_color='';
                            $role_color = '';
                            if($row['user_role'] === 'super-admin'){
                                $role_color = "rgb(255, 157, 35)";
                                $role_bg_color="rgba(255, 157, 35,.20)";
                            }else if($row['user_role'] === 'admin'){
                                $role_color = "rgb(31, 111, 95)";
                                $role_bg_color = "rgba(31, 111, 95,.30)";
                            }else if($row['user_role'] === 'editor') {
                                $role_color = "rgb(23, 12, 121)";
                                $role_bg_color = "rgba(23, 12, 121,.20)";
                            }else if ($row['user_role'] === 'reader') {
                                $$role_color = "rgb(138, 95, 65)";
                                $role_bg_color = "rgba(138, 95, 65,.20)";
                            }
                            if($row['status'] === 'active'){
                                $color = '#008000';
                                $bgcolor = 'rgba(0, 128, 0,.25)';
                            }else if($row['status'] === 'inactive'){
                                $color = "#2C2C2C";
                                $bgcolor = "rgba(44, 44, 44,.25)";
                            }else if($row['status'] === 'suspend'){
                                $color='#C00707;';
                                $bgcolor='rgba(191, 8, 8,.25)';
                            }
                            $output .=" <tr class='align-middle'>
                                            <td>
                                                <div class='d-flex'>
                                                    <div style='height:45px;width:45px;border-radius:100%;text-align:center;line-height:45px;color:{$role_color};background-color:{$role_bg_color}' class='me-3 text-muted text-uppercase fw-bold'>{$initial}</div>
                                                    <div>
                                                        <p class='text-capitalize m-0 fw-bold'>{$row['name']}</p>
                                                            <p class='m-0 text-muted fw-normal'>{$row['email']}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class='text-capitalize text-primary fw-bold'><span style='color:{$role_color};background-color:{$role_bg_color};font-size:13px;' class='px-1 d-inline-block rounded-1 mb-0'>{$row['user_role']}</span></td>
                                                <td class='text-capitalize '><span style='color:{$color};background-color:{$bgcolor};font-size:14px;' class='d-inline-block rounded-1 mb-0 px-1'>{$row['status']}</span></td>
                                                <td>{$row['join_date']}</td>
                                                <td>
                                                    <a href='edit-user-page.php?editId={$row['id']}' class='text-decoration-none text-muted'><i class='fa-solid fa-edit text-muted'></i></a>
                                                    <i style= 'cursor:pointer;'class='fa-solid fa-trash text-danger'
                                                    data-delete-user={$row['id']} id='delete-user-button'></i>
                                                </td>
                                        </tr>";
                        }
                $output .= "</tbody>
                    </table>";
        }
        echo $output;

    }else{
        header("Location: {$host_name}/admin/not-found.php");
        exit();
    }

?>