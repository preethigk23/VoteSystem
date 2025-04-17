<?php
// Include necessary files and DB connection
include('../db/db_connect.php'); // ✅ Corrected path
include 'includes/navbar.php';

include 'includes/header.php'; 
// Suppress warning if $user is not set
if (!isset($user)) {
    $user = [];
}

// Fetch total number of voters who voted
$result = $conn->query("SELECT COUNT(*) AS total_voted FROM votes");
$row = $result->fetch_assoc();
$total_voted = $row['total_voted'];

?>
<?php include 'includes/footer.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Print Voting Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        .summary {
            margin: 100px auto;
            text-align: center;
        }
        .summary h1 {
            font-size: 28px;
        }
        .summary p {
            font-size: 20px;
        }
        @media print {
            button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="summary">
        <h1>Voting Summary</h1>
        <p><strong>Total Voters Voted:</strong> <?php echo $total_voted; ?></p>
        <button onclick="window.print()">Print Page</button>
    </div>

      
</body>
</html>
<?php include 'includes/footer.php'; ?>