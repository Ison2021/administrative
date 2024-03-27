<?php
include ('./connect.php');
if (isset($_POST['register'])) {
    try {
        $fullname = $_POST['fullname'];
        $modulename = $_POST['modulename'];
        $xstat = $_POST['xstat'];

        
        $conn->beginTransaction();
    
        $stmt = $conn->prepare("SELECT `fullname`, `modulename` FROM `compliance_regulatory` WHERE `fullname` = :fullname AND `modulename` = :modulename");
        $stmt->execute([
            'fullname' => $fullname,
            'modulename' => $modulename

        ]);
        $nameExist = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (empty($nameExist)) {
            $verificationCode = rand(100000, 999999);
    
            $insertStmt = $conn->prepare("INSERT INTO `compliance_regulatory` (`fullname`, `modulename`, `xstat`) VALUES (:fullname, :modulename, :xstat)");
            $insertStmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
            $insertStmt->bindParam(':modulename', $modulename, PDO::PARAM_STR);
            $insertStmt->bindParam(':xstat', $xstat, PDO::PARAM_STR);
            $insertStmt->execute();
            
            session_start();
            $conn->commit();
        } 

        
        if (session_destroy() == true) {
            echo "
            <script>
                alert('Submitted Successfully.');
                window.location.href = 'http://localhost/ams/checklist/chk.php';
            </script>
            ";
        } 
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
?>