<?php
    include ("connexion.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the record based on the ID
        $sql = "SELECT * FROM member WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
    }

    // Handle form submission for updating the record
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $iD = $_POST['iD'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $status = $_POST['STATU'];
        $equipe = $_POST['equipe'];

        // Update the record
        $updateSql = "UPDATE member SET Fname=?, Lname=?, email=?, equipe=?, phone=?, role=?, STATU=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $updateSql);
        mysqli_stmt_bind_param($stmt, 'sssssssi', $fname, $lname, $email, $equipe, $phone, $role, $status, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Edit Member</h1>

    <form method="POST" action="" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <input type="hidden" name="iD" value="<?php echo $row['iD']; ?>">

        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">First Name:</label>
        <input type="text"  name="Fname" value="<?php echo $row['Fname']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Last Name:</label>
        <input type="text"  name="Lname" value="<?php echo $row['Lname']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Email:</label>
        <input type="text"  name="email" value="<?php echo $row['email']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Phone:</label>
        <input type="text"  name="phone" value="<?php echo $row['phone']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Role:</label>
        <input type="text"  name="role" value="<?php echo $row['role']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Status:</label>
        <input type="text"  name="STATU" value="<?php echo $row['STATU']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <label for="fname" class="block text-sm font-semibold leading-6 text-gray-900">Equipe:</label>
        <input type="text"  name="equipe" value="<?php echo $row['equipe']; ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        

        

        <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"  a>Update</button>
    </form>

    <a href="index.php">Back to Member List</a>
</body>
</html>
