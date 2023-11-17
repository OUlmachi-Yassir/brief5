<?php
    include ("connexion.php");
    $sql ="SELECT*FROM member ";
    $sql1 ="SELECT*FROM team ";
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
                <div class="flex flex-col mt-14 mx-8 py-4  ">
                    <div class="cardHeader">
                        <h1>tableux de membre</h1>
                    </div>
                    <br>
                    <div class="cardHeader">
                        <table class="min-w-full divide-y divide-gray-300 border-4 border-slate-800 text-center py-2 border-collapse border border-slate-500 ">
                            <tr class=" text-white bg-slate-800	">
                                <td class="border border-slate-600">User ID</td>
                                <td class="border border-slate-600">Fname</td>
                                <td class="border border-slate-600">Lname</td>
                                <td class="border border-slate-600">Email</td>
                                <td class="border border-slate-600">Equipe</td>
                                <td class="border border-slate-600">Phone</td>
                                <td class="border border-slate-600">Role</td>
                                <td class="border border-slate-600">Statu</td>
                                <td class="border border-slate-600">Edite</td>
                                <td class="border border-slate-600">Delete</td>

                            </tr>
                            <tr>
                               <?php
                               while ($row = mysqli_fetch_assoc($result))
                               {
                            ?>
                                <td><?php echo $row['iD'];  ?></td>
                                <td><?php echo $row['Fname'];  ?></td>
                                <td><?php echo $row['Lname'];  ?></td>
                                <td><?php echo $row['email'];  ?></td>
                                <td><?php echo $row['equipe'];  ?></td>
                                <td><?php echo $row['phone'];  ?></td>
                                <td><?php echo $row['role'];  ?></td>
                                <td><?php echo $row['STATU'];  ?></td>
                                <td><a href="edit.php?id=<?php echo $row['iD']; ?>" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a></td>
                                <td><a href="delete.php?deleteid=<?php echo $row['iD']; ?>" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a></td>
                            </tr>
                            <?php
                               }
                               
                               ?>
                            
                            
                            
                        </table>
                    </div>
                    <br>
                    <a href="ajouterM.php">ajouter un membre</a>
                    <br>
                    <br><br>
                    <div class="cardHeader">
                    <h1>tableux de membre</h1>
                    </div>
                    <br>
                    <div class="cardHeader">
                        <table class="min-w-full divide-y divide-gray-300 border-4 border-black text-center py-2 ">
                            <tr class=" text-white bg-black">
                                <td class="border border-slate-600">team ID</td>
                                <td class="border border-slate-600">Team name</td>
                                <td class="border border-slate-600">Creation Date</td>
                                <td class="border border-slate-600">Edite</td>
                                <td class="border border-slate-600">Delete</td>
                                
                            </tr>
                            <tr>
                               <?php
                               while ($row = mysqli_fetch_assoc($result1))
                               {
                            ?>
                                <td><?php echo $row['teamID'];  ?></td>
                                <td><?php echo $row['teamName'];  ?></td>
                                <td><?php echo $row['creationDate'];  ?></td>
                                <td><a href="#" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a></td>
                                <td><a href="#" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a></td>
                            </tr>
                            <?php
                               }
                               
                               ?>
                            
                            
                            
                        </table>
                    </div>
                </div>
           
       
    
</body>
</html>
<?php
   