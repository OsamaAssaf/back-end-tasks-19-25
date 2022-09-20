<?php require_once('templates/header.php');

createHeader('Users');


?>


<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="users-list.php">Users</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <i class="material-icons">notifications</i>
                            <p class="d-lg-none d-md-block">
                                Notifications
                            </p>
                        </a>
                    </li>
                    <!-- your navbar here -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"> Users List</h4>
                            <p class="card-category"> All The Users That Have Sign-up</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="users-table">
                                    <thead>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                        Date Of Birth
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require_once('functions/toast.php'); ?>

    <script>
        let usersList = [];
        $(document).ready(function (){
            const tableBody = $('#users-table tbody');
            const URL = 'http://localhost/task_23_part_2_api/users/get-users.php';

            $.get(URL,function (users) {

                if(parseInt(users['flag']) === 1){
                    usersList = users['users'];
                    for(let i = 0 ; i < usersList.length ; i++){
                        tableBody.append(createTableRow(usersList[i]));
                    }
                }else{
                    tableBody.append('<h1>' + users['msg'] +'</h1>');
                }
            },'json');
            function createTableRow(user){
                const tr = $('<tr></tr>');
                tr.append('<td>' + user['id']  + '</td>');
                tr.append('<td>' + user['full_name']  + '</td>');
                tr.append('<td>' + user['email']  + '</td>');
                tr.append('<td>' + user['username']  + '</td>');
                tr.append('<td>' + user['phone_number']  + '</td>');
                tr.append('<td>' + user['date_of_birth']  + '</td>');

                const actionsRow = $('<td></td>');
                const deleteBtn = $('<button></button>');
                const editBtn = $('<button></button>');

                deleteBtn.addClass('btn');
                deleteBtn.addClass('btn-danger');
                deleteBtn.text('Delete');

                editBtn.addClass('btn');
                editBtn.addClass('btn-primary');
                editBtn.text('Edit');

                deleteBtn.on('click',function (){
                    deleteUser(user['id']);
                });

                editBtn.on('click',function (){
                    editUser(user);
                });

                actionsRow.append(editBtn);
                actionsRow.append(deleteBtn);

                tr.append(actionsRow);

                return tr;
            }
            function deleteUser(id){
                const URL = 'http://localhost/task_23_part_2_api/users/delete-user.php';
                $.ajax({
                    type: "POST",
                    url: URL,
                    data: {
                        id: id,
                    },
                    success: function (data) {
                        if(parseInt(data['flag']) === 1){
                            location.reload();
                            showToast('User Added');
                        }else{
                            showToast(data['msg']);
                        }

                    },
                    dataType: 'json'
                });
            }
            function editUser(user){
                console.log(user);
            }
        });

    </script>



    <?php require_once('templates/footer.php'); ?>
